<?php
function addAttachment($calendarService, $driveService, $calendarId, $eventId, $fileId) {
    $file = $driveService->files->get($fileId);
    $event = $calendarService->events->get($calendarId, $eventId);
    $attachments = $event->attachments;

    $attachments[] = array(
        'fileUrl' => $file->alternateLink,
        'mimeType' => $file->mimeType,
        'title' => $file->title
    );
    $changes = new Google_Service_Calendar_Event(array(
        'attachments' => $attachments
    ));

    $calendarService->events->patch($calendarId, $eventId, $changes, array(
        'supportsAttachments' => TRUE
    ));
}