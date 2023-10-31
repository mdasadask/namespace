1. composer init
2.  psr-4 bole dite hobe kon namespace ebong kon directory te khujbe
    "autoload" : {
        "psr-4" : {
            "Animals\\" : "Animals/"
        }
    }
3. include_once "vendor/autoload.php"; add korte hobe 
4. composer dump-autoload