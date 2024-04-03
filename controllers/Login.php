<?php

class Login
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = DataBase::conn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function main()
    { {
            if (session_start() == true) {
                session_destroy();

                require_once "views/login.php";
            }
        }
    }
    public function Login()

    {
        if ($_POST) {
            session_start();

            try {
                $email = $_POST['email'];
                $pass = $_POST['pass'];

                $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email AND pass = :pass");
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':pass', $pass);
                $stmt->execute();

                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    $_SESSION['iduser'] = $user['iduser'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['n_id'] = $user['n_id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['pass'] = $user['pass'];
                    $_SESSION['user_rol'] = $user['user_rol'];

                    header("Location:?c=Login&a=menu");
                } else {
?>
                    <script language='JavaScript'>
                        alert("Acceso denegado");
                        location.href = "index.php";
                    </script>
            <?php
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
    public function menu()
    {
        session_start();

        if (empty($_SESSION['iduser'])) {

            ?>
            <script language='JavaScript'>
                location.href = "index.php";
            </script>
<?php
        } 
            require_once "views/menu.php";
    }
}
