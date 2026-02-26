<!doctype html>
<html>
<head>
    <title>This is the title of the webpage!</title>
</head>
<body id='body'>
    <p id='some-p'>
        <?php
        // Пытаемся прочитать файл /etc/passwd
        $file_path = '/etc/passwd';
        
        if (file_exists($file_path) && is_readable($file_path)) {
            $content = file_get_contents($file_path);
            if ($content !== false) {
                // Заменяем переводы строк на <br> для отображения в HTML
                $content = nl2br(htmlspecialchars($content));
                echo $content;
            } else {
                echo 'Ошибка: Не удалось прочитать файл';
            }
        } else {
            echo 'Ошибка: Файл не существует или недоступен для чтения';
        }
        ?>
    </p>
</body>
</html>