<?php
$profile = [
    'name' => 'Fazli Bin Tajudin',
    'role' => 'Software Engineer / Full-Stack Developer',
    'location' => 'Batu Pahat, Johor, Malaysia',
    'email' => 'fazlitj32@gmail.com',
    'phone' => '011-10257069',
    'linkedin' => 'https://www.linkedin.com/in/fazli-tajudin-341613271',
    'github' => 'https://github.com/fazlitj32/fazli-tajudin',
    'summary' => 'Full-Stack Developer with 1 year and 4 months of professional experience, primarily in PHP and Laravel. Focused on debugging, troubleshooting, optimization, and stable delivery across front-end and back-end systems.',
    'about' => 'Computer Science (Software Engineering) graduate with hands-on experience in web and mobile application development. Built and maintained production systems while collaborating with teams to deliver reliable, user-friendly software.',
];

$navItems = [
    ['id' => 'about', 'label' => 'About'],
    ['id' => 'experience', 'label' => 'Experience'],
    ['id' => 'projects', 'label' => 'Projects'],
    ['id' => 'education', 'label' => 'Education'],
    ['id' => 'contact', 'label' => 'Contact'],
];

$stats = [
    ['value' => '1y 4m', 'label' => 'Professional Experience'],
    ['value' => '5+', 'label' => 'Featured Projects'],
    ['value' => 'PHP / Laravel', 'label' => 'Primary Stack'],
];

$visionMission = [
    'vision' => 'To become a skilled developer who creates innovative software that improves lives and enhances everyday experiences.',
    'mission' => 'To continuously improve development skills by learning new technologies, building impactful applications, and collaborating with strong teams to deliver high-quality solutions.',
];

$skills = [
    'Languages' => ['PHP', 'JavaScript', 'Java', 'C++', 'C', 'Dart'],
    'Frameworks' => ['Laravel', 'React.js', 'Flutter', 'Bootstrap'],
    'Databases' => ['MySQL', 'Firebase'],
    'Tools & Technologies' => ['Linux', 'XAMPP', 'AJAX', 'JSON'],
    'Testing' => ['User Acceptance Testing (UAT)'],
];

$experience = [
    [
        'role' => 'Full-Stack Developer',
        'company' => 'Nurfa Technologies Sdn Bhd',
        'period' => 'Oct 2024 - Present',
        'highlights' => [
            'Debugged and maintained existing PHP/Laravel systems to resolve functional and performance issues.',
            'Developed and enhanced features based on project requirements, including filtering and system improvements.',
            'Implemented front-end and back-end updates for new functionalities.',
            'Performed data cleaning, validation, and optimization in MySQL databases.',
            'Collaborated with team members to ensure system stability and timely issue resolution.',
        ],
    ],
    [
        'role' => 'Web Programmer Intern',
        'company' => 'FunnelEvo Sdn Bhd',
        'period' => 'Sept 2023 - Feb 2024',
        'highlights' => [
            'Completed degree internship focused on web system development.',
            'Developed the College Support System website using PHP.',
            'Built FunnelEvo affiliate website modules using PHP.',
            'Implemented both front-end and back-end functionalities.',
        ],
    ],
    [
        'role' => 'Web Programmer Intern',
        'company' => 'System Consultancy Services',
        'period' => 'Sept 2019 - Feb 2020',
        'highlights' => [
            'Completed diploma internship focused on web system development.',
            'Developed front-end and back-end website components for TUDM using React.js and PHP.',
        ],
    ],
];

$projects = [
    [
        'title' => 'College Support System (Website)',
        'description' => 'Web platform for UTM students (Kolej 9 & 10) to submit complaints online and manage room bookings, replacing manual paper-based processes.',
        'stack' => ['HTML', 'PHP', 'JavaScript', 'Bootstrap', 'ToyyibPay', 'BillPlz'],
        'image' => 'assets/images/portfolio-pages/portfolio-page-08.png',
        'image_position' => 'center top',
        'status' => 'Completed',
        'note' => 'Approved by Kolej 9 and 10 stakeholders.',
    ],
    [
        'title' => 'K9 & K10 Student Complaint & Support System (Mobile)',
        'description' => 'Flutter and Dart mobile application extending the same complaint and room-booking workflow for students, integrated with the existing platform.',
        'stack' => ['Flutter', 'Dart', 'Firebase'],
        'image' => 'assets/images/portfolio-pages/portfolio-page-09.png',
        'image_position' => 'center top',
        'status' => 'Completed',
        'note' => 'Companion app to the website platform.',
    ],
    [
        'title' => 'FunnelEvo Affiliate System',
        'description' => 'Web-based affiliate management system supporting registration, onboarding, and affiliate data management with core reporting features.',
        'stack' => ['PHP', 'MySQL'],
        'image' => 'assets/images/affiliate_program_FE.png',
        'image_position' => 'right bottom',
        'status' => 'Completed',
        'note' => 'Uses your provided affiliate program screenshot style.',
    ],
    [
        'title' => 'e-Commerce Mobile App',
        'description' => 'Android Studio app with Java and backend database integration for products, users, orders, cart, and checkout flow.',
        'stack' => ['Java', 'Android Studio', 'Database'],
        'image' => null,
        'image_position' => 'center center',
        'status' => 'Archived',
        'note' => 'Source code and screenshots are currently unavailable.',
    ],
    [
        'title' => 'TUDM Internal Web System',
        'description' => 'Front-end and back-end system to support structured information handling, user access, and administrative workflows.',
        'stack' => ['React.js', 'PHP'],
        'image' => null,
        'image_position' => 'center center',
        'status' => 'Archived',
        'note' => 'Source code and screenshots are currently unavailable.',
    ],
];

$education = [
    [
        'institution' => 'Universiti Teknologi Malaysia',
        'program' => 'Bachelor of Computer Science (Software Engineering)',
        'date' => 'July 2024',
        'details' => [
            'CGPA: 3.18',
            'Strong foundation in software engineering: analysis, design, and development.',
            'Final Year Project: College Student Complaint & Support System (Flutter mobile and website).',
        ],
    ],
    [
        'institution' => 'Universiti Teknologi Malaysia',
        'program' => 'Diploma in Computer Science',
        'date' => 'May 2020',
        'details' => [
            'Final Year Project: e-Commerce Mobile App using Android Studio.',
        ],
    ],
];

$additional = [
    'Languages' => 'Malay, English',
    'Certifications / Leadership' => 'Student Representative Council (Jan 2019), Facilitator (May 2018), Google Developer Student Club Vice President (July 2023)',
];
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fazli Tajudin | Portfolio Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="ambient ambient-a"></div>
    <div class="ambient ambient-b"></div>

    <div class="page-wrap">
        <nav class="navbar navbar-expand-lg sticky-top nav-shell">
            <div class="container">
                <a class="navbar-brand" href="#home">Fazli Tajudin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#portfolioNav" aria-controls="portfolioNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="portfolioNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php foreach ($navItems as $item): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#<?php echo htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8'); ?>">
                                    <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container pb-4">
            <header id="home" class="hero">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-8">
                        <span class="hero-tag">Portfolio 2026</span>
                        <h1 class="display-5 fw-bold mb-2"><?php echo htmlspecialchars($profile['name'], ENT_QUOTES, 'UTF-8'); ?></h1>
                        <p class="fs-5 mb-3"><?php echo htmlspecialchars($profile['role'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="mb-3"><?php echo htmlspecialchars($profile['summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="small mb-3">
                            <strong>Location:</strong> <?php echo htmlspecialchars($profile['location'], ENT_QUOTES, 'UTF-8'); ?> |
                            <strong>Phone:</strong> <?php echo htmlspecialchars($profile['phone'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                        <div class="hero-actions d-flex flex-wrap gap-2">
                            <a class="btn btn-light" href="mailto:<?php echo htmlspecialchars($profile['email'], ENT_QUOTES, 'UTF-8'); ?>">Email Me</a>
                            <a class="btn btn-outline-light" href="<?php echo htmlspecialchars($profile['linkedin'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">LinkedIn</a>
                            <a class="btn btn-outline-light" href="<?php echo htmlspecialchars($profile['github'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">GitHub</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="stats-grid">
                            <?php foreach ($stats as $stat): ?>
                                <article class="stat-card">
                                    <p class="stat-value mb-0"><?php echo htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    <p class="mb-0 small"><?php echo htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </header>

            <section id="about" class="section-block">
                <p class="section-label mb-1">About</p>
                <article class="card section-card">
                    <div class="card-body">
                        <h2 class="h3 mb-3">Profile Summary</h2>
                        <p class="mb-0"><?php echo htmlspecialchars($profile['about'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </article>
            </section>

            <section class="section-block">
                <div class="row g-3">
                    <div class="col-md-6">
                        <article class="card section-card vision-card h-100">
                            <div class="card-body">
                                <p class="section-label mb-1">Vision</p>
                                <p class="mb-0"><?php echo htmlspecialchars($visionMission['vision'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="card section-card vision-card h-100">
                            <div class="card-body">
                                <p class="section-label mb-1">Mission</p>
                                <p class="mb-0"><?php echo htmlspecialchars($visionMission['mission'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section id="experience" class="section-block">
                <p class="section-label mb-1">Experience</p>
                <article class="card section-card">
                    <div class="card-body">
                        <h2 class="h3 mb-3">Work Experience</h2>
                        <div class="timeline">
                            <?php foreach ($experience as $job): ?>
                                <article class="timeline-item">
                                    <h3 class="h5 mb-1"><?php echo htmlspecialchars($job['role'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <p class="timeline-meta mb-2"><?php echo htmlspecialchars($job['company'], ENT_QUOTES, 'UTF-8'); ?> | <?php echo htmlspecialchars($job['period'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    <ul class="mb-0">
                                        <?php foreach ($job['highlights'] as $highlight): ?>
                                            <li><?php echo htmlspecialchars($highlight, ENT_QUOTES, 'UTF-8'); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </article>
            </section>

            <section id="projects" class="section-block">
                <p class="section-label mb-1">Projects</p>
                <article class="card section-card">
                    <div class="card-body">
                        <h2 class="h3 mb-3">Selected Work</h2>
                        <div class="row g-3">
                            <?php foreach ($projects as $project): ?>
                                <?php $isArchived = $project['status'] === 'Archived'; ?>
                                <div class="col-lg-6">
                                    <article class="project-card">
                                        <?php if (!empty($project['image'])): ?>
                                            <a href="<?php echo htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                                                <img
                                                    src="<?php echo htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                                    class="project-image"
                                                    alt="<?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?> preview"
                                                    loading="lazy"
                                                    style="object-position: <?php echo htmlspecialchars($project['image_position'], ENT_QUOTES, 'UTF-8'); ?>;"
                                                >
                                            </a>
                                        <?php else: ?>
                                            <div class="project-placeholder">
                                                <div>
                                                    <div class="brand-font mb-1">No Screenshot Available</div>
                                                    <div class="small">Archived project assets are unavailable</div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                            <h3 class="h5 mb-0"><?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                            <span class="status-pill <?php echo $isArchived ? 'status-archived' : 'status-completed'; ?>">
                                                <?php echo htmlspecialchars($project['status'], ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </div>
                                        <p class="mb-2"><?php echo htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p class="muted small mb-2"><?php echo htmlspecialchars($project['note'], ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p class="mb-0">
                                            <?php foreach ($project['stack'] as $item): ?>
                                                <span class="skill-pill"><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></span>
                                            <?php endforeach; ?>
                                        </p>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </article>
            </section>

            <section id="education" class="section-block">
                <div class="row g-3">
                    <div class="col-lg-7">
                        <article class="card section-card h-100">
                            <div class="card-body">
                                <p class="section-label mb-1">Education</p>
                                <h2 class="h3 mb-3">Academic Background</h2>
                                <?php foreach ($education as $item): ?>
                                    <article class="mb-3">
                                        <h3 class="h5 mb-1"><?php echo htmlspecialchars($item['program'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                        <p class="timeline-meta mb-2"><?php echo htmlspecialchars($item['institution'], ENT_QUOTES, 'UTF-8'); ?> | <?php echo htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8'); ?></p>
                                        <ul class="mb-0">
                                            <?php foreach ($item['details'] as $detail): ?>
                                                <li><?php echo htmlspecialchars($detail, ENT_QUOTES, 'UTF-8'); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-5">
                        <article class="card section-card h-100">
                            <div class="card-body">
                                <p class="section-label mb-1">Core Skills</p>
                                <h2 class="h3 mb-3">Tech Stack</h2>
                                <?php foreach ($skills as $group => $items): ?>
                                    <p class="fw-bold mb-1"><?php echo htmlspecialchars($group, ENT_QUOTES, 'UTF-8'); ?></p>
                                    <p class="mb-3">
                                        <?php foreach ($items as $skill): ?>
                                            <span class="skill-pill"><?php echo htmlspecialchars($skill, ENT_QUOTES, 'UTF-8'); ?></span>
                                        <?php endforeach; ?>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section id="contact" class="section-block">
                <article class="card section-card">
                    <div class="card-body">
                        <p class="section-label mb-1">Contact</p>
                        <h2 class="h3 mb-3">Let's Connect</h2>
                        <div class="row g-3">
                            <div class="col-md-5 contact-list">
                                <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($profile['email'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($profile['email'], ENT_QUOTES, 'UTF-8'); ?></a></p>
                                <p><strong>Phone:</strong> <?php echo htmlspecialchars($profile['phone'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <p><strong>Location:</strong> <?php echo htmlspecialchars($profile['location'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <p><strong>LinkedIn:</strong> <a href="<?php echo htmlspecialchars($profile['linkedin'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">View Profile</a></p>
                                <p><strong>GitHub:</strong> <a href="<?php echo htmlspecialchars($profile['github'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">View Repository</a></p>
                            </div>
                            <div class="col-md-7">
                                <?php foreach ($additional as $label => $value): ?>
                                    <p class="mb-2"><strong><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>:</strong> <?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <p class="footer-note">Built with PHP, HTML, and Bootstrap.</p>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

