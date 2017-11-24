<?php
namespace App\Controllers;
use App\Model\Users;
use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;

class About
{
    public function getData()
    {
        $users = Users::get();
        foreach ($users as $user) {
          $data[] = $user->data['first_name'];
        }
        return view('pages/about-get', $data);
    }
    /**
     * See respect/validation/docs
     * @return [type] [description]
     */
    public function test()
    {
        $date = '19-11-2017';
        $email = 'alex@usa.com';
        $description = 'xxx';

        $date_validator = Validator::date('d-m-Y')->notEmpty();
        $email_validator = Validator::email()->notEmpty();
        $desc_validator = Validator::stringType()->length(3, 750);
        try{
            $date_validator->assert($date);
            $email_validator->assert($email);
            $desc_validator->assert($description);
            $data = ['date' => date('F jS Y', strtotime($date)),
                    'email' => $email,
                    'description' => $description
                ];
        }
        catch(NestedValidationException $e) {
            $data['errors'] = $e->getMessages();
        }
        view('pages/test-validation', $data);
    }

    public function testParam($id1)
    {
        view('pages/about-testparam', ['param' => $id1]);
    }

    public function testParam2($id1, $id2 = null)
    {
        view('pages/about-testparam', ['param' => [$id1, $id2]]);
    }
}
