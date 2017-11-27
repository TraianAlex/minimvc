<?php

namespace App\Core;
// Simple REQUEST_URI-based caching system
// * require output buffering to be enabled

class URI_Cache
{
    var $cache_dir = "/router/cache_url";
    var $cache_duration = 30;  // cache duration, in seconds
    var $cache_ext = ".html";
    var $debug = 0;
    var $need_cache = true;

    //class constructor, take care of cache directory creation
    //if autorun set to false, call Load() manually to load from cache
    public function __construct($dur=0, $dir='', $ext='', $load_and_exit=true)
    {
        if (!ob_list_handlers())
        {
            if ($this->debug)
                print("Warning: Output buffering is not enabled. I am enabling it.");
            ob_start('ob_gzhandler');
        }

        if ($dur) $this->cache_duration = $dur;
        if ($dir) $this->cache_dir = $dir;
        if ($ext) $this->cache_ext = $ext;

        $this->cache_dir = $_SERVER['DOCUMENT_ROOT']."/".$this->cache_dir;
        if ($load_and_exit) $this->Load();

        // check if output buffering is enabled...
        if (!file_exists($this->cache_dir))
        {
            mkdir($this->cache_dir);
            chmod($this->cache_dir,0777);
        }
    }

    public function __destruct()
    {
        if ($this->need_cache) return $this->CachePage();
    }

    // load cached content.
    // if exit is true, output cached content and exit() when load success
    // if exit is false, return cached content
    private function Load($exit=true)
    {
        $cachefile = "$this->cache_dir/".md5($_SERVER['REQUEST_URI']).$this->cache_ext;
        if (file_exists($cachefile))
        {
            if (filemtime($cachefile) > time()-$this->cache_duration)
            {
                $this->need_cache = false;
                if ($exit) {
                    print file_get_contents($cachefile);
                    if ($this->debug) print "<br />This page is cached by interval of $this->cache_duration.<br />Now: ".time();
                    exit;
                }
                return file_get_contents($cachefile);
            }
            else
                unlink($cachefile); // delete expired cache
        }
        return false;
    }

    //  cache the current page
    private function CachePage()
    {
        $cachefile = "$this->cache_dir/".md5($_SERVER['REQUEST_URI']).$this->cache_ext;
        if ($this->debug) print "<br />Cached: ".time();
        file_put_contents($cachefile, ob_get_contents());
        if ($this->debug) print "<br />Cache renewed\n";
    }
}
