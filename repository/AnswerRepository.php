<?php

class AnswerRepository
{
    const TABLE = 'answers';

    public static function checkAnswer(?string $guestId): bool
    {
        if (!$guestId) return false;

        try {
            $pdo = Database::getInstance()->getConnection();
            $query = "SELECT 1 FROM " . self::TABLE . " WHERE `guest_id` = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$guestId]);
            return (bool)$stmt->fetchColumn();
        } catch (PDOException $e) {
            error_log("Ошибка при проверке ответа: " . $e->getMessage());
            return false;
        }
    }

    public static function save(string $guestId, string $answer): void
    {
        try {
            $pdo = Database::getInstance()->getConnection();
            $stmt = $pdo->prepare("INSERT INTO " . self::TABLE . " (answer, guest_id) VALUES (?, ?)");
            $stmt->execute([$answer, $guestId]);
        } catch (PDOException $e) {
            error_log("Ошибка при сохранении ответа: " . $e->getMessage());
        }
    }
}
