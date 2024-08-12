<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Bài tập web</title>
</head>

<body>
    <div class="container">
        <form id="form">
            <div class="form-control">
                <span for="#year">Nhập ngày sinh</span>
                <input id="year" type="date" required>
            </div>

            <button type="submit">Tính cung hoàng đạo</button>
            <span id="result"></span>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script/script.js"></script>
    <script>
        $(document).ready(function() {

            $("#form").submit(function(e) {
                e.preventDefault();

                var tuoi = $("#year").val();
                const date = new Date(tuoi);
                console.log(date);

                console.log(date.getFullYear()); // Year
                console.log(date.getMonth()); // Month (0-11)
                console.log(date.getDate());
            })

        })
    </script>
</body>

</html>