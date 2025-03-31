<?php
session_start();

$questions = [
    "Stolica Włoch to:" => "Rzym",
    "Ile wynosi 8 + 12?" => "20",
    "Największa planeta w Układzie Słonecznym to:" => "Jowisz",
    "Który kontynent jest najmniejszy?" => "Australia"
];

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    $_SESSION['current_question'] = 0;
    $_SESSION['questions'] = array_keys($questions);
    $_SESSION['answers'] = array_values($questions);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['restart'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    if (isset($_POST['answer'])) {
        $correct_answer = $_SESSION['answers'][$_SESSION['current_question']];
        $user_answer = trim(strtolower($_POST['answer']));
        
        $_SESSION['answer_result'] = [
            'correct_answer' => $correct_answer,
            'user_answer' => htmlspecialchars($_POST['answer']),
            'is_correct' => ($user_answer == strtolower($correct_answer))
        ];

        if ($_SESSION['answer_result']['is_correct']) {
            $_SESSION['score']++;
        }

        $_SESSION['answered'] = true; 
    }

    if (isset($_POST['next'])) {
        $_SESSION['answered'] = false; 
        $_SESSION['current_question']++;
    }

    if ($_SESSION['current_question'] >= count($_SESSION['questions'])) {
        echo "<h2>Quiz zakończony!</h2>";
        echo "<p>Twój wynik: " . $_SESSION['score'] . " / " . count($_SESSION['questions']) . "</p>";
        echo '<form method="post"><button type="submit" name="restart">Rozpocznij od nowa</button></form>';
        session_destroy();
        exit;
    }
}

$current_question_text = $_SESSION['questions'][$_SESSION['current_question']];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>
<style>
    body{
        background-color: grey;
        color: black;
    }
</style>
<body>
    <?php if (isset($_SESSION['answered']) && $_SESSION['answered']): ?>
        <h3>Podsumowanie odpowiedzi:</h3>
        <p><strong>Poprawna odpowiedź:</strong> <?php echo $_SESSION['answer_result']['correct_answer']; ?></p>
        <p><strong>Twoja odpowiedź:</strong> <?php echo $_SESSION['answer_result']['user_answer']; ?></p>
        <?php if ($_SESSION['answer_result']['is_correct']): ?>
            <p><strong>Gratulacje! Zdobyłeś punkt!</strong></p>
        <?php else: ?>
            <p><strong>Niepoprawna odpowiedź.</strong></p>
        <?php endif; ?>
        <p><strong>Aktualny wynik:</strong> <?php echo $_SESSION['score']; ?> / <?php echo count($_SESSION['questions']); ?></p>
        <form method="post">
            <button type="submit" name="next">Następne pytanie</button>
        </form>
    <?php else: ?>
        <h2>Pytanie <?php echo $_SESSION['current_question'] + 1; ?>:</h2>
        <p><?php echo $current_question_text; ?></p>
        <form method="post">
            <input type="text" name="answer" required>
            <button type="submit">Dalej</button>
        </form>
    <?php endif; ?>
</body>
</html>