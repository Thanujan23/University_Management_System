document.addEventListener('DOMContentLoaded', function () {
    var coursesBtn = document.getElementById('coursesBtn');
    var courseListContainer = document.createElement('div');
    courseListContainer.className = 'course-list';
    courseListContainer.innerHTML = `
        <ul>
            <li><div class="course-box" data-course="Computer Science">Computer Science</div></li>
            <li><div class="course-box" data-course="Engineering">Engineering</div></li>
            <li><div class="course-box" data-course="Business Administration">Business Administration</div></li>
            <li><div class="course-box" data-course="Medicine">Medicine</div></li>
            <li><div class="course-box" data-course="Psychology">Psychology</div></li>
            <li><div class="course-box" data-course="Mathematics">Mathematics</div></li>
            <li><div class="course-box" data-course="Economics">Economics</div></li>
            <li><div class="course-box" data-course="Environmental Science">Environmental Science</div></li>
            <li><div class="course-box" data-course="Political Science">Political Science</div></li>
        </ul>
    `;
    document.body.appendChild(courseListContainer);

    var timeoutId;

    function showCourseList() {
        var rect = coursesBtn.getBoundingClientRect();
        courseListContainer.style.display = 'block';
        courseListContainer.style.left = rect.left + 'px';
        courseListContainer.style.top = rect.bottom + 'px';
    }

    function hideCourseList() {
        courseListContainer.style.display = 'none';
    }

    coursesBtn.addEventListener('mouseenter', function () {
        showCourseList();
    });

    coursesBtn.addEventListener('mouseleave', function () {
        timeoutId = setTimeout(hideCourseList, 500);
    });

    courseListContainer.addEventListener('mouseenter', function () {
        clearTimeout(timeoutId);
        showCourseList();
    });

    courseListContainer.addEventListener('mouseleave', function () {
        hideCourseList();
    });

    courseListContainer.querySelectorAll('.course-box').forEach(function (courseBox) {
        courseBox.addEventListener('click', function () {
            var selectedCourse = courseBox.dataset.course;
            console.log("Selected course: " + selectedCourse);
            // Replace the console.log with your actual action
        });
    });
});






document.addEventListener('DOMContentLoaded', function () {
    var facultiesBtn = document.getElementById('facultiesBtn');
    var facultyListContainer = document.createElement('div');
    facultyListContainer.className = 'faculty-list';
    facultyListContainer.innerHTML = `
        <ul>
            <li><div class="faculty-box" data-faculty="Computer Science">Computer Science</div></li>
            <li><div class="faculty-box" data-faculty="Engineering">Engineering</div></li>
            <li><div class="faculty-box" data-faculty="Business Administration">Business Administration</div></li>
            <li><div class="faculty-box" data-faculty="Medicine">Medicine</div></li>
            <li><div class="faculty-box" data-faculty="Psychology">Psychology</div></li>
            <li><div class="faculty-box" data-faculty="Mathematics">Mathematics</div></li>
            <li><div class="faculty-box" data-faculty="Economics">Economics</div></li>
            <li><div class="faculty-box" data-faculty="Environmental Science">Environmental Science</div></li>
            <li><div class="faculty-box" data-faculty="Political Science">Political Science</div></li>
        </ul>
    `;
    document.body.appendChild(facultyListContainer);

    var timeoutId;

    function showFacultyList() {
        var rect = facultiesBtn.getBoundingClientRect();
        facultyListContainer.style.display = 'block';
        facultyListContainer.style.left = rect.left + 'px';
        facultyListContainer.style.top = rect.bottom + 'px';
    }

    function hideFacultyList() {
        facultyListContainer.style.display = 'none';
    }

    facultiesBtn.addEventListener('mouseenter', function () {
        showFacultyList();
    });

    facultiesBtn.addEventListener('mouseleave', function () {
        timeoutId = setTimeout(hideFacultyList, 500);
    });

    facultyListContainer.addEventListener('mouseenter', function () {
        clearTimeout(timeoutId);
        showFacultyList();
    });

    facultyListContainer.addEventListener('mouseleave', function () {
        hideFacultyList();
    });

    facultyListContainer.querySelectorAll('.faculty-box').forEach(function (facultyBox) {
        facultyBox.addEventListener('click', function () {
            var selectedFaculty = facultyBox.dataset.faculty;
            console.log("Selected faculty: " + selectedFaculty);
            // Replace the console.log with your actual action
        });
    });
});



//LOGin button
        // Get the login button element
        var loginButton = document.getElementById("login");

        // Add a click event listener to the button
        loginButton.addEventListener("click", function() {
            // Redirect to the desired page (replace 'target-page.html' with your actual page URL)
            window.location.href = '#';
        });


        $(document).ready(function () {
            var elementsToHide = $('.login, .lmore, .one h1');
            var firstSectionHeight = $('.one').height();

            $(window).scroll(function () {
                var scrollPosition = $(window).scrollTop();

                if (scrollPosition < firstSectionHeight) {
                    elementsToHide.show();
                } else {
                    elementsToHide.hide();
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var header = document.querySelector('header');
        
            window.addEventListener('scroll', function () {
                if (window.scrollY > 0) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        
            // ... (your existing code)
        
        });
        

      