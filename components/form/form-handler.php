<?php

require_once __DIR__ . '/../../Database.php';
require_once __DIR__ . '/../../repository/GuestRepository.php';
require_once __DIR__ . '/../../repository/AnswerRepository.php';

header('Content-Type: application/json');

$answer = $_POST['answer'] ?? 'no';
$guestId = $_POST['guest_id'] ?? null;

try {
    echo handle($guestId, $answer);
} catch (\Throwable $e) {
    http_response_code(500);
    echo json_encode(['status' => '500', 'message' => $e->getMessage()]);
}

function handle(string $guestId, string $answer): string|false
{
    $guestExists = GuestRepository::checkGuest($guestId);
    if (!$guestExists) {
        http_response_code(404);
        return json_encode(['status' => '404', 'message' => 'Guest not found']);
    }

    $answerExists = AnswerRepository::checkAnswer($guestId);
    if ($answerExists) {
        http_response_code(409);
        return json_encode(['status' => '409', 'message' => 'You have already sent your answer']);
    }

    AnswerRepository::save($guestId, $answer);
    http_response_code(200);
    return json_encode(['status' => '200', 'message' => 'The answer has been saved']);
}
