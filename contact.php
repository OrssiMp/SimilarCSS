<div style="display: none;">
    <?php include 'config.php'; ?>
</div>
<head>
    <title>Contact nous</title>
    <style>
        form {
            background: #fff;
            max-width: 400px;
            margin: 60px auto;
            padding: 32px 28px 24px 28px;
            border-radius: 10px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        label {
            display: flex;
            flex-direction: column;
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            margin-top: 6px;
            padding: 10px 12px;
            border: 1px solid #cfd8dc;
            border-radius: 5px;
            font-size: 1rem;
            background: #f9fbfc;
            transition: border 0.2s;

        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border: 1px solid ghostwhite;
            outline: none;
            background: #ffffff;
            outline: 4px solid #88c4ffdc;
        }

        button[type="submit"] {
            background: #1976d2;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 0;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background: #125ea7;
        }
    </style>
</head>

<form action="" method="post">
    <label for="name">
        Nom:<input type="text" id="name" name="name" required>
    </label>


    <label for="email">
        Email: <input type="email" id="email" name="email" required>
    </label>

    <label for="message">
        Message: <textarea id="message" name="message" rows="4" required></textarea>
    </label>
    <button type="submit">Envoyer</button>
</form>