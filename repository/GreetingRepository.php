<?php

class GreetingRepository
{
    const TABLE = 'greetings';

    public static function getByGuestId(?string $guestId): ?array
    {
        if (!$guestId) return false;

        try {
            $pdo = Database::getInstance()->getConnection();
            $query = "
                SELECT gr.title, gr.text
                FROM guests AS g
                    INNER JOIN " . self::TABLE . " AS gr ON gr.id = g.greeting_id
                WHERE g.id = ?;
            ";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$guestId]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return !$result ? null : $result;
        } catch (PDOException $e) {
            error_log("Ошибка при получении приветствия: " . $e->getMessage());
            return null;
        }
    }
}