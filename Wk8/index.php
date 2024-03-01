<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OmarRizz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <img src="ricardo.jpg" alt="Profile Picture">
            <p>Welcome to my portfolio! I'm a passionate student interested in...</p>
            <button id="open-modal" onclick="openModal()">Open Modal</button>

        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Modal Title</h2>
                <p>This is the content of the modal.</p>
            </div>
        </div>
        </div>
    </section>

    <section id="education">
        <div class="container">
            <h2>Education</h2>
            <div class="education-item">
                <h3>University Name</h3>
                <p>Degree: Bachelor of Science in Computer Science</p>
                <p>Year: 2020 - Present</p>
            </div>
            <!-- Add more education items as needed -->
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <h2>Skills</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Python</li>
                <!-- Add more skills as needed -->
            </ul>
        </div>
    </section>

    <section id="image-carousel">
        <div class="container">
            <h2>Image Carousel</h2>
            <div class="carousel">
                <img src="image1.jpg" alt="Image 1">
                <img src="image2.jpg" alt="Image 2">
                <img src="image3.jpg" alt="Image 3">
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="project">
                <h3>Project 1</h3>
                <p>Description of Project 1...</p>
            </div>
            <div class="project">
                <h3>Project 2</h3>
                <p>Description of Project 2...</p>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <form id="contact-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <button id="scroll-to-top" onclick="scrollToTop()">Scroll To Top</button>

    <footer>
        <div class="container">
            <p>&copy; 2024 Student Portfolio</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
