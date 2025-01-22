<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์</title>
</head>
<body>
    <pre>
<?php
function calculateGrade($score) {
    if ($score >= 80) return 'A';
    if ($score >= 70) return 'B';
    if ($score >= 60) return 'C';
    if ($score >= 50) return 'D';
    return 'E';
}

// ดึงค่าจาก POST
$names = [$_POST['name1'], $_POST['name2'], $_POST['name3'], $_POST['name4']];
$scores = [$_POST['score1'], $_POST['score2'], $_POST['score3'], $_POST['score4']];

$totalScore = 0;
$resultText = "";

foreach ($scores as $index => $score) {
    $grade = calculateGrade($score);
    $totalScore += $score;
    $resultText .= "The name is {$names[$index]} and Score is {$score} Grade is {$grade}\n";
}

$averageScore = $totalScore / count($scores);

$resultText .= "\nTotal score is: {$totalScore}";
$resultText .= "\nAverage score is: " . number_format($averageScore, decimals: 2);

echo $resultText;
?>
    </pre>
</body>
</html>
