<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Roboto:100,300,400,500,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendor/css/notfound.css') }}">
    <title>Lỗi, không tìm thấy trang</title>
</head>
<body>
    <div class="container">
        <h1>404 Error</h1>
        <p class="zoom-area"><b>Xin lỗi </b>, Trang bạn yêu cầu không tìm thấy hoặc không tồn tại </p>
        <section class="error-container">
            <span>4</span>
            <span><span class="screen-reader-text">0</span></span>
            <span>4</span>
        </section>
        <div class="link-container">
            <a href="{{ url()->previous() }}" class="more-link">Quay lại</a>
        </div>
    </div>
</body>
</html>