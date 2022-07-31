<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- including bootstrap -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
   <!-- JavaScript Bundle -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- including JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <title>First E-Commerce Project</title>
</head>
<body>
    {{View::make('header')}}

    @yield("content")

    {{View::make('footer')}}

</body>
<style>
    
    .custom-login{
        height:500px;
        padding-top:100px
    }
     /* carousel in the product view page */
    .slider-img{
        height:400px !important;
        width:1200px !important;
    }
    .custom-product{
        height:600px;
    }

    .slider-caption{
        background-color: #00000045;
    }
    /* Trending Wrapper in the product view page */
    .trending-img{
        height:100px;
        width:;
    }
    .trending-item{
        /* the float here was done for the footer also i dont know whyyyyyyyyyy  then i used a style: clear:both in the footer page to fix it*/
        float:left;
        width:20%;
    }
    .trending-wrapper{
        margin:30px;
    }
</style>
</html>