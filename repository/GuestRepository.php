<?php

class GuestRepository
{
    const TABLE = 'guests';

    public static function checkGuest(?string $guestId): bool
    {
        if (!$guestId) return false;

        try {
            $pdo = Database::getInstance()->getConnection();
            $query = "SELECT 1 FROM " . self::TABLE . " WHERE `id` = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$guestId]);
            return (bool)$stmt->fetchColumn();
        } catch (PDOException $e) {
            error_log("Ошибка при проверке гостя: " . $e->getMessage());
            return false;
        }
    }
}
