<?php
class bmi
{

    public $weight = 0;
    public $height = 0;
    public $age = 0;



    function calculate()
    {
        if ($this->age < 2) {
            echo ("<font color='red'><h4>Vul een leeftijd vanaf 2 jaar in!</h4><font><br />");
        } elseif ($this->height < 1) {
            echo ("<font color='red'><h4>Vul een lengte vanaf 1 cm in!</h4><font><br />");
        } elseif ($this->weight < 1) {
            echo ("<font color='red'><h4>Vul een gewicht vanaf 1 kg in!</h4><font><br />");
        } elseif (empty($_POST["weight"]) || empty($_POST["height"]) || empty($_POST["age"])) {
            echo ("<font color='red'><h4>Vul alle gegevens juist in!</h4><font><br />");
        } else {
            $bmi = $this->weight / ($this->height / 100 * $this->height / 100);
            $bmi = round($bmi, 2);

            // Output BMI
            echo ("<h4>Je BMI is " . $bmi . ".</h4><br />");

            // 18+
            if ($this->age > 18 && $bmi <= 18.5) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age > 18 && $bmi > 18.5 && $bmi < 25) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age > 18 && $bmi >= 25 && $bmi < 30) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age > 18 && $bmi >= 30 && $bmi < 40) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            } elseif ($this->age > 18 && $bmi >= 40) {
                echo ("<font color='red'><h4>Je hebt ziekelijk overgewicht.</h4><font><br />");
            }

            // 18 jaar
            if ($this->age == 18 && $bmi <= 16) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 18 && $bmi > 16 && $bmi < 17) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 18 && $bmi >= 17 && $bmi < 25) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 18 && $bmi >= 25 && $bmi < 30) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 18 && $bmi >= 30) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 17 jaar
            if ($this->age == 17 && $bmi <= 15.6) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 17 && $bmi > 15.6 && $bmi < 16.58) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 17 && $bmi >= 16.58 && $bmi < 24.5) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 17 && $bmi >= 24.5 && $bmi < 29.4) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 17 && $bmi >= 29.4) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 16 jaar
            if ($this->age == 16 && $bmi <= 15.12) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 16 && $bmi > 15.12 && $bmi < 16.08) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 16 && $bmi >= 16.08 && $bmi < 23.9) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 16 && $bmi >= 23.9 && $bmi < 28.9) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 16 && $bmi >= 28.9) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 15 jaar
            if ($this->age == 15 && $bmi <= 14.6) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 15 && $bmi > 14.6 && $bmi < 15.55) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 15 && $bmi >= 15.55 && $bmi < 23.3) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 15 && $bmi >= 23.3 && $bmi < 28.3) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 15 && $bmi >= 28.3) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 14 jaar
            if ($this->age == 14 && $bmi <= 14.09) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 14 && $bmi > 14.09 && $bmi < 15.01) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 14 && $bmi >= 15.01 && $bmi < 22.6) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 14 && $bmi >= 22.6 && $bmi < 27.6) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 14 && $bmi >= 27.6) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 13 jaar
            if ($this->age == 13 && $bmi <= 13.59) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 13 && $bmi > 13.59 && $bmi < 14.48) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 13 && $bmi >= 14.48 && $bmi < 21.9) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 13 && $bmi >= 21.9 && $bmi < 26.8) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 13 && $bmi >= 26.8) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 12 jaar
            if ($this->age == 12 && $bmi <= 13.18) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 12 && $bmi > 13.18 && $bmi < 14.05) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 12 && $bmi >= 14.05 && $bmi < 21.2) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 12 && $bmi >= 21.2 && $bmi < 26) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 12 && $bmi >= 26) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 11 jaar
            if ($this->age == 11 && $bmi <= 12.89) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 11 && $bmi > 12.89 && $bmi < 13.72) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 11 && $bmi >= 13.72 && $bmi < 20.6) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 11 && $bmi >= 20.6 && $bmi < 25.1) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 11 && $bmi >= 25.1) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 10 jaar
            if ($this->age == 10 && $bmi <= 12.66) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 10 && $bmi > 12.66 && $bmi < 13.45) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 10 && $bmi >= 13.45 && $bmi < 19.8) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 10 && $bmi >= 19.8 && $bmi < 24) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 10 && $bmi >= 24) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 9 jaar
            if ($this->age == 9 && $bmi <= 12.5) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 9 && $bmi > 12.5 && $bmi < 13.24) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 9 && $bmi >= 13.24 && $bmi < 19.1) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 9 && $bmi >= 19.1 && $bmi < 22.7) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 9 && $bmi >= 22.7) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 8 jaar
            if ($this->age == 8 && $bmi <= 12.42) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 8 && $bmi > 12.42 && $bmi < 13.11) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 8 && $bmi >= 13.11 && $bmi < 18.4) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 8 && $bmi >= 18.4 && $bmi < 21.6) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 8 && $bmi >= 21.6) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 7 jaar
            if ($this->age == 7 && $bmi <= 12.42) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 7 && $bmi > 12.42 && $bmi < 13.08) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 7 && $bmi >= 13.08 && $bmi < 17.9) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 7 && $bmi >= 17.9 && $bmi < 20.6) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 7 && $bmi >= 20.6) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            //6 jaar
            if ($this->age == 6 && $bmi <= 12.5) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 6 && $bmi > 12.5 && $bmi < 13.15) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 6 && $bmi >= 13.15 && $bmi < 17.6) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 6 && $bmi >= 17.6 && $bmi < 19.8) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 6 && $bmi >= 19.8) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 5 jaar
            if ($this->age == 5 && $bmi <= 12.66) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 5 && $bmi > 12.66 && $bmi < 13.31) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 5 && $bmi >= 13.31 && $bmi < 17.4) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 5 && $bmi >= 17.4 && $bmi < 19.3) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 5 && $bmi >= 19.3) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 4 jaar
            if ($this->age == 4 && $bmi <= 12.86) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 4 && $bmi > 12.86 && $bmi < 13.52) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 4 && $bmi >= 13.52 && $bmi < 17.6) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 4 && $bmi >= 17.6 && $bmi < 19.3) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 4 && $bmi >= 19.3) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 3 jaar
            if ($this->age == 3 && $bmi <= 13.09) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 3 && $bmi > 13.09 && $bmi < 13.79) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 3 && $bmi >= 13.79 && $bmi < 17.9) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 3 && $bmi >= 17.9 && $bmi < 19.6) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 3 && $bmi >= 19.6) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }

            // 2 jaar
            if ($this->age == 2 && $bmi <= 13.37) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
            } elseif ($this->age == 2 && $bmi > 13.37 && $bmi < 14.12) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
            } elseif ($this->age == 2 && $bmi >= 14.12 && $bmi < 18.4) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
            } elseif ($this->age == 2 && $bmi >= 18.4 && $bmi < 20.1) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
            } elseif ($this->age == 2 && $bmi >= 20.1) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
            }
        }
    }
}


$bmi = new bmi;
