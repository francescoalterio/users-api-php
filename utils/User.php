<?php
    namespace utils;

    class User {
        public $name;
        public $last_name;
        public $gender;
        public $email;
        public $website;

        public function __construct() {
            require '../usersData/maleNames.php';
            require '../usersData/femaleNames.php';
            require '../usersData/lastNames.php';

            $random_gender = rand(0, 1);
            $this->gender = $random_gender ? 'male' : 'female';
            $name_list = $random_gender ? $male_names : $female_names;
            $this->name = $name_list[rand(0, count($name_list) - 1)];
            $this->last_name = $last_names[rand(0, count($last_names))];
            $this->email = $this->create_email();
            $this->website = $this->create_website();
        }

        private function format_text($data) {
            return str_replace(['á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú'],['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], strtolower($data));
        }

        private function create_email() {
            $special_characters = [".", "-", "_"];
            $emails = ["hotmail","gmail", "outlook"];

            $character = rand(1, 10) <= 7 ? $special_characters[rand(0, 2)] : "";
            $email = $emails[rand(0, 2)];

            $name_lower = $this->format_text($this->name);
            $last_name_lower = $this->format_text($this->last_name);

            $number1 = rand(1, 10) <= 8 ? rand(0, 9) : "";
            $number2 = rand(1, 10) <= 8 && $number1 ? rand(0, 9) : "";
            $number3 = rand(1, 10) <= 5  && $number2 ? rand(0, 9) : "";


            return "$name_lower$character$last_name_lower$number1$number2$number3@$email.com";
        } 
        
        private function create_website() {
            $domains = ["com", "org", "io", "info"];
            $domain = $domains[rand(0, count($domains) - 1)];
            $name_lower = $this->format_text($this->name);
            $last_name_lower = $this->format_text($this->last_name);
            return "$name_lower$last_name_lower.$domain";
        }
         
    }