<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        main {
            padding: 20px;
        }

        .note-form textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        .note-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .note-form button:hover {
            background-color: #45a049;
        }

        .notes-list {
            list-style-type: none;
            padding: 0;
        }

        .notes-list li {
            background: white;
            margin-bottom: 10px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .notes-list li strong {
            color: #4CAF50;
        }

    </style>
</head>
<body>
<header>
    <h1>My Notepad App NeerWeb</h1>
</header>
<main>
