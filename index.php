<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Shafa Ayuning Baskoro</h1>
        <p>Web Developer & UI/UX Designer</p>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section id="about">
            <h2>About Me</h2>
            <p>
                I am a passionate web developer with a strong background in creating intuitive and beautiful web applications.
                Skilled in HTML, CSS, and Python, with experience in UI/UX design.
            </p>
        </section>

        <section id="skills">
            <h2>Skills</h2>
            <ul>
                <li>HTML, CSS, JavaScript, PHP</li>
                <li>UI/UX Design</li>
                <li>Web Development</li>
                <li>Figma, Visual Studio Code, Webflow</li>
            </ul>
        </section>

        <section id="education">
            <h2>Education</h2>
            <h3>Universitas Negeri Malang</h3>
            <p>Computer Science | IPK: 3.68/4.00</p>
            <h3>SMA 01 Bululawang</h3>
            <p>Graduated with an average score of 86/100.</p>
        </section>

        <section id="experience">
            <h2>Experience</h2>
            <h3>Paskibra SMAN 01 Bululawang</h3>
            <p>Chairperson (2020-2021)</p>
            <p>Led activities and coordinated events, managing time and communication effectively.</p>
        </section>

        <section id="contact">
            <h2>Contact Me</h2>
            <form method="post" action="send_message.php">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Shafa Ayuning Baskoro. All rights reserved.</p>
    </footer>
</body>

</html>
