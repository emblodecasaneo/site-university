<section id="contact">
        <h1>Contact us</h1>
        <form action="send_contact.php" method="post">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Envoyer</button>
        </form>
</section>