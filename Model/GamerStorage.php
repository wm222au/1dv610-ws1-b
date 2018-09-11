<?php

namespace Model;

session_start(); // Make sure that the session is up and running.

class GamerStorage
{
    // Could change this one into a non-static variable for easier reusability for multiple storages?
    private static $SESSION_KEY = "HANGMAN_PHP_SESSION";

    /**
     * Prepends the given ID with this application's session key.
     */
    private function getSessionKey(string $id): string
    {
        return self::$SESSION_KEY . '_' . $id;
    }

    /**
     * Checks whether the provided entry with the given id exists in the application's session storage.
     */
    public function exists(string $id): bool
    {
        return isset($_SESSION[$id . $this->getSessionKey($id)]);
    }

    /**
     * Attempts to load an entry with the given identifier from the application's session storage.
     * If no entry was found, null will be returned.
     */
    public function loadEntry(string $id)
    {
        if ($this->exists($id)) {
            return $_SESSION[$id . $this->getSessionKey($id)];
        } else {
            return new Gamer();
        }

    }

    /**
     * Saves the provided entry with the given id in the application's session storage.
     */
    public function saveEntry(string $id, $entry)
    {
        $_SESSION[$id . $this->getSessionKey($id)] = $entry;
    }

    /**
     * Removes the provided entry with the given id from the application's session storage.
     */
    public function deleteEntry(string $id)
    {
        unset($_SESSION[$id . $this->getSessionKey($id)]);
    }
}
