<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="{{ $url }}/1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    @for ($i = 1; $i < $total; $i++)
        <li class="page-item"><a class="page-link" href="{{ $url }}/{{ $i }}">{{ $i }}</a></li>
    @endfor
    <li class="page-item">
      <a class="page-link" href="{{ $url }}/{{ $total }}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
