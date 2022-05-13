<?php

class Student extends User
{



    public function can_signup($firstname, $lastname, $email, $password)
    {
        try {
            $conn = DB::getConnection();
            $statement = $conn->prepare("INSERT INTO student-tl (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)");
            $statement->bindValue("firstname", $firstname);
            $statement->bindValue("lastname", $lastname);
            $statement->bindValue("email", $email);
            $options = [
                'cost' => 12,
            ];
            $hash = password_hash($this->password, PASSWORD_DEFAULT,  $options);
            $statement->bindValue("password", $password);
            return  $statement->execute();
        } catch (Throwable $e) {

            echo $e->getMessage('mysql:host=localhost;dbname=ducktalk', 'root', 'root');
        }
    }

    public function can_login()
    {

        $conn = DB::getConnection();
        $statement = $conn->prepare("SELECT * FROM student-tl WHERE email= :email");
        $statement->bindValue("email", $this->email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        $hashPassword = $user['password'];
        if (password_verify($this->password, $hashPassword)) {
            return true;
        } else {
            return false;
        }
    }
}
