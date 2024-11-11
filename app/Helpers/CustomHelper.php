<?php

namespace App\Helpers;

class CustomHelper
{
    public static function setHeadersAndTitle($parentHeader, $childHeader)
    {
        $pageTitle = 'Admin - ' . $parentHeader;
        
        return [
            'parentHeader' => $parentHeader,
            'childHeader' => $childHeader,
            'pageTitle' => $pageTitle,
        ];
    }
    public static function GenerateUniqueId($table, $prefix){
        // Get the current year
        $year = date('Y');

        // Get the latest unique ID from the specified table for the current year
        $latestUniqueId = \DB::table($table)
            ->where('unique_id', 'like', $prefix . $year . '%') // Filter by the prefix and current year
            ->orderBy('unique_id', 'desc') // Get the latest unique ID
            ->value('unique_id');

        // If there is no existing unique ID, start from 1
        if (!$latestUniqueId) {
            $nextId = 1;
        } else {
            // Extract the numeric part after the prefix and year and increment it
            $numericPart = intval(substr($latestUniqueId, strlen($prefix) + 4)); // 4 for 'YYYY'
            $nextId = $numericPart + 1; // Increment the numeric part
        }

        // Create the new unique ID with zero-padding
        $uniqueId = $prefix . $year . str_pad($nextId, 10, '0', STR_PAD_LEFT); // Adjust the padding as needed

        // Check if the generated ID already exists
        $exists = \DB::table($table)->where('unique_id', $uniqueId)->exists();

        // If the ID exists, we need to keep generating a new one (shouldn't happen with this logic)
        while ($exists) {
            $nextId++; // Increment to get a new numeric part
            $uniqueId = $prefix . $year . str_pad($nextId, 10, '0', STR_PAD_LEFT); // Generate a new unique ID
            $exists = \DB::table($table)->where('unique_id', $uniqueId)->exists(); // Check again
        }

        return $uniqueId;
    }
    
    public static function getLeadStatus($status)
    {
        $statuses = [
            1 => ['name' => 'Unattended', 'color' => 'bg-warning'],
            2 => ['name' => 'Follow-up', 'color' => 'bg-info'],
            3 => ['name' => 'Potential Lead', 'color' => 'bg-primary'],
            4 => ['name' => 'Confirmed Lead', 'color' => 'bg-success'],
            5 => ['name' => 'Package Executed', 'color' => 'bg-secondary'],
            6 => ['name' => 'Package Confirmed', 'color' => 'bg-success'],
            7 => ['name' => 'Cancelled', 'color' => 'bg-danger'],
            8 => ['name' => 'Hold', 'color' => 'bg-dark'],
            9 => ['name' => 'Close', 'color' => 'bg-success'],
        ];
    
        return $statuses[$status] ?? ['name' => 'Unknown Status', 'color' => 'bg-muted'];
    }


    // Add more methods as needed...
}
