<?php

/**
 * Controller class for posts.
 *
 * @property mixed $model An instance of DB model.
 */
class Securities extends Controller
{
    private $model;
    public $data = [];  // to store data entered by user, as well as to be passed to view
    public $errors = [];  // to store errors, as well as to be passed to view
    public $controller_role = "security";

    public function __construct($user_data = [])
    {
        // check if user is signed in
        $is_signed_in = isset($_SESSION['user_id']);

        if ($is_signed_in) {
            // check if user has the right role
            $role = $_SESSION['user_role'];

            if ($role == $this->controller_role) {
                // continue
            } else {
                die('You do not have the right role to access this page.');
            }
            // check if user has the right role
            if ($_SESSION['user_role'] != $this->controller_role) {
                die('You do not have the right role to access this page.');
            }
        } else {
            header('Location: ' . URL_ROOT . '/staffs/sign_in');
        }

        // load DB model
        $this->model = $this->loadModel('Security');  // load DB model. PDO instance is inside private property
    }

    public function index()
    {
        $this->loadView('securities/dashboard');
    }

    /**
     * Signs out the current user.
     *
     * This method unsets the session variables for user_id, user_email, and user_name,
     * destroys the session, and loads the sign in page.
     *
     * @return void
     */
    public function signOut()
    {
        // unset session variables
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_role']);

        // destroy session
        session_destroy();

        // load sign in page
        $this->loadView('staffs/sign_in');
    }
}