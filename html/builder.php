<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder - Online Resume Builder</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/resume-styles.css">
</head>
<body>
    <header role="banner">
        <h1>Online Resume Builder</h1>
        <nav role="navigation" aria-label="Main navigation">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="logout.html">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main role="main">
        <section aria-labelledby="builder-heading" class="resume-builder">
            <h2 id="builder-heading">Build Your Resume</h2>
            
            <div class="builder-container">
                <form id="resume-form" class="resume-form">
                    <div class="form-section">
                        <h3>Personal Information</h3>
                        <div class="form-group">
                            <label for="full-name">Full Name:</label>
                            <input type="text" id="full-name" name="full_name" required aria-required="true">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required aria-required="true">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="photo">Upload Photo:</label>
                            <input type="file" id="photo" name="photo" accept="image/*">
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>Education</h3>
                        <div id="education-fields">
                            <div class="education-entry">
                                <div class="form-group">
                                    <label for="degree">Degree:</label>
                                    <input type="text" id="degree" name="education[0][degree]">
                                </div>
                                <div class="form-group">
                                    <label for="institution">Institution:</label>
                                    <input type="text" id="institution" name="education[0][institution]">
                                </div>
                                <div class="form-group">
                                    <label for="year">Year:</label>
                                    <input type="text" id="year" name="education[0][year]">
                                </div>
                            </div>
                        </div>
                        <button type="button" id="add-education" class="button secondary">Add Another Education</button>
                    </div>
                    
                    <div class="form-section">
                        <h3>Work Experience</h3>
                        <div id="experience-fields">
                            <div class="experience-entry">
                                <div class="form-group">
                                    <label for="job-title">Job Title:</label>
                                    <input type="text" id="job-title" name="experience[0][job_title]">
                                </div>
                                <div class="form-group">
                                    <label for="company">Company:</label>
                                    <input type="text" id="company" name="experience[0][company]">
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duration:</label>
                                    <input type="text" id="duration" name="experience[0][duration]">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea id="description" name="experience[0][description]" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="add-experience" class="button secondary">Add Another Experience</button>
                    </div>
                    
                    <div class="form-section">
                        <h3>Skills</h3>
                        <div id="skill-fields">
                            <div class="form-group">
                                <label for="skills">List your skills (comma separated):</label>
                                <textarea id="skills" name="skills" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="button">Save Resume</button>
                </form>
                
                <div class="resume-preview">
                    <h3>Resume Preview</h3>
                    <div id="preview-container">
                        <!-- Resume preview will be dynamically inserted here -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer role="contentinfo">
        <p>&copy; 2025 Online Resume Builder. All rights reserved.</p>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/resume-builder.js"></script>
</body>
</html>
