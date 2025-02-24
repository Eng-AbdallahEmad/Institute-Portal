<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>إمتحان | برمجة</title>
        <link rel="stylesheet" href="{{ asset('assets/css/examPaperStyle.css') }}" />
        <!-- Boxicons CSS CDN -->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    
    <body>
        <div class="load">
            <div class="loader"></div>
            <h1>يتم الأن تجهيز الأمتحان الخاص بك، الرجاء الأنتظار . . .</h1>
        </div>
        <div class="container">
            <header>
                <div class="title-icon">
                    <h1>إمتحان منتصف الفصل الدراسي الثاني</h1>
                    <button id="show-information">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="35"
                            height="35"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                    </button>
                </div>
                <input type="hidden" id="examDate" value="14-10-2024" />
                <input type="hidden" id="timerValue" value="20" />
                <div class="groups">
                    <button id="close-group">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <div class="group">
                        <p>
                            <i class="bx bxs-book"></i> إسم المادة: نظم معلومات
                            الأدارية
                        </p>
                        <p><i class="bx bx-qr"></i> كود المادة: {{ $subCode }}</p>
                        <p>
                            <i class="bx bxs-time-five"></i> مدة الأمتحان: 15
                            دقيقة
                        </p>
                        <p>
                            <i class="bx bxs-check-square"></i> عدد الأسئلة: 15
                            سؤال
                        </p>
                        <p class="date">
                            <i class="bx bxs-timer"></i> مدة الأنتهاء الكلي:
                            <span class="countdown"></span>
                        </p>
                    </div>
                    <div class="group">
                        <p>
                            <i class="bx bxs-user-circle"></i> أسم الطالب:
                            عبدالله عماد فهمي
                        </p>
                        <p>
                            <i class="fa-solid fa-graduation-cap"></i> الشعبة:
                            نظم معلومات الأعمال
                        </p>
                        <p>
                            <i class="fa-solid fa-people-group"></i> الفرقة:
                            التانية
                        </p>
                        <p>
                            <i class="fa-solid fa-building-columns"></i> الفصل
                            الدراسي: الثاني
                        </p>
                        <p>
                            <i class="fa-solid fa-calendar-days"></i> التاريخ:
                            <span class="exam-date"></span>
                        </p>
                    </div>
                </div>
            </header>
            <section class="instructions">
                <h2>تعليمات هامة:</h2>
                <ul>
                    <li>
                        أثناء دخولك علي صفحة الأمتحان فلا يمكنك الخروج إلا بعد
                        الأنتهاء منها.
                    </li>
                    <li>
                        لا تقوم بنشر هذة الأسئلة لان الأمتحانات تختلف من طالب
                        لأخر.
                    </li>
                    <li>
                        عند إنتهاء الوقت سيتم تلقائياً حفظ أجابتك التي قمت بحلها
                        فقط.
                    </li>
                    <li>
                        عند الضغط على زر الإرسال ... يجب عليك التأكد من أنك قمت
                        بحل جميع الأسئلة.
                    </li>
                    <li>
                        إذا انتهت مدة الامتحان الكلي، سيتم منعك من دخول أي
                        امتحان.
                    </li>
                </ul>
            </section>
            <section class="questions">
                <h2>الأسئلة:</h2>
                <div class="timer">
                    <h4>00:00</h4>
                </div>
                <form action="../index.html" method="post">
                    <div class="question">
                        <h3>السؤال 1:</h3>
                        <p>حل المعادلة 2x + 3 = 7.</p>
                        <div class="options">
                            <label>
                                <input type="radio" name="q1" value="a" />
                                <div class="tex-q">
                                    <span class="rce">أ)</span>
                                    <span class="dce">1</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q1" value="b" />
                                <div class="tex-q">
                                    <span class="rce">ب)</span>
                                    <span class="dce">2</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q1" value="c" />
                                <div class="tex-q">
                                    <span class="rce">ج)</span>
                                    <span class="dce">3</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q1" value="d" />
                                <div class="tex-q">
                                    <span class="rce">د)</span>
                                    <span class="dce">4</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="question">
                        <h3>السؤال 2:</h3>
                        <p>احسب مساحة مثلث قاعدته 5 سم وارتفاعه 10 سم.</p>
                        <div class="options">
                            <label>
                                <input type="radio" name="q2" value="a" />
                                <div class="tex-q">
                                    <span class="rce">أ)</span>
                                    <span class="dce">25 سم²</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q2" value="b" />
                                <div class="tex-q">
                                    <span class="rce">ب)</span>
                                    <span class="dce">30 سم²</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q2" value="c" />
                                <div class="tex-q">
                                    <span class="rce">ج)</span>
                                    <span class="dce">35 سم²</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q2" value="d" />
                                <div class="tex-q">
                                    <span class="rce">د)</span>
                                    <span class="dce">40 سم²</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="question">
                        <h3>السؤال 3:</h3>
                        <p>ما هي عاصمة فرنسا؟</p>
                        <div class="options">
                            <label>
                                <input type="radio" name="q3" value="a" />
                                <div class="tex-q">
                                    <span class="rce">أ)</span>
                                    <span class="dce">برلين</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q3" value="b" />
                                <div class="tex-q">
                                    <span class="rce">ب)</span>
                                    <span class="dce">باريس</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q3" value="c" />
                                <div class="tex-q">
                                    <span class="rce">ج)</span>
                                    <span class="dce">مدريد</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q3" value="d" />
                                <div class="tex-q">
                                    <span class="rce">د)</span>
                                    <span class="dce">روما</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="question">
                        <h3>السؤال 4:</h3>
                        <p>ما هو الكوكب الأقرب إلى الشمس؟</p>
                        <div class="options">
                            <label>
                                <input type="radio" name="q4" value="a" />
                                <div class="tex-q">
                                    <span class="rce">أ)</span>
                                    <span class="dce">الزهرة</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q4" value="b" />
                                <div class="tex-q">
                                    <span class="rce">ب)</span>
                                    <span class="dce">المريخ</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q4" value="c" />
                                <div class="tex-q">
                                    <span class="rce">ج)</span>
                                    <span class="dce">عطارد</span>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="q4" value="d" />
                                <div class="tex-q">
                                    <span class="rce">د)</span>
                                    <span class="dce">الأرض</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="btn-submit">
                        <button type="submit">إرسال</button>
                    </div>
                </form>
            </section>
        </div>
    </body>
    <script>
        // Script For Screen loading
        window.addEventListener("load", function () {
            var loadingScreen = document.querySelector(".load");
            setTimeout(function () {
                loadingScreen.style.opacity = "0"; // Set opacity to 0 to trigger fade-out
            }, 4000); // Wait for 30 seconds

            // After the fade-out transition, hide the loading screen completely
            setTimeout(function () {
                loadingScreen.style.display = "none";
            }, 4500); // This delay should be longer than your fade-out transition duration
        });
    </script>

    <script>
        function startCountdown(endTime, elements) {
            setInterval(function () {
                var now = new Date().getTime();
                var distance = endTime - now;

                var hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                var minutes = Math.floor(
                    (distance % (1000 * 60 * 60)) / (1000 * 60)
                );
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                elements.forEach(function (element) {
                    element.textContent =
                        seconds +
                        " ثانية و " +
                        minutes +
                        " دقيقة و " +
                        hours +
                        " ساعة";
                });

                if (distance < 0) {
                    elements.forEach(function (element) {
                        element.textContent = "انتهى الوقت";
                    });
                }
            }, 1000);
        }

        window.onload = function () {
            var now = new Date();
            var todayDate =
                now.getDate() +
                "-" +
                (now.getMonth() + 1) +
                "-" +
                now.getFullYear();
            var examDateInput = document.getElementById("examDate").value;

            var header = document.querySelector("header");
            var countdownElement = header.querySelector(".countdown");
            var examDateElement = header.querySelector(".exam-date");

            examDateElement.textContent = examDateInput;

            if (examDateInput === todayDate) {
                var endTime = new Date(
                    now.getFullYear(),
                    now.getMonth(),
                    now.getDate() + 1,
                    0,
                    0,
                    0
                ).getTime();
                startCountdown(endTime, [countdownElement]);
            } else {
                countdownElement.textContent = "0 ثانية و 0 دقيقة و 0 ساعة";
            }
        };
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            // استخراج القيم من الـ URL
            const urlParams = new URLSearchParams(window.location.search);
            const subCode = urlParams.get("subCode");
            const examCode = urlParams.get("examCode");

            // إنشاء مفتاح فريد بناءً على subCode و examCode
            const storageKey = `countdownTime_${subCode}_${examCode}`;

            let timerValue =
                parseInt(document.getElementById("timerValue").value) * 60;
            let savedTime = localStorage.getItem(storageKey);
            let startTime = Date.now();

            if (savedTime) {
                timerValue = parseInt(savedTime);
            } else {
                localStorage.setItem(storageKey, timerValue);
            }

            function startCountdown(totalTimeInSeconds) {
                let timerDiv = document.querySelector(".timer h4");

                function updateTimer() {
                    let minutes = Math.floor(totalTimeInSeconds / 60);
                    let seconds = totalTimeInSeconds % 60;
                    seconds = seconds < 10 ? "0" + seconds : seconds;
                    timerDiv.innerHTML = `${minutes}:${seconds}`;
                    totalTimeInSeconds--;

                    if (totalTimeInSeconds < 0) {
                        clearInterval(timerInterval);
                        timerDiv.innerHTML = "انتهى الوقت";
                        localStorage.removeItem(storageKey);
                    } else {
                        localStorage.setItem(storageKey, totalTimeInSeconds);
                    }
                }

                updateTimer(); // Initialize the timer display
                let timerInterval = setInterval(updateTimer, 1000);
            }

            startCountdown(timerValue);
        });
    </script>

    <script>
        // احصل على الأزرار والعنصر .groups
        const showButton = document.getElementById("show-information");
        const closeButton = document.getElementById("close-group");
        const groups = document.querySelector(".groups");

        // إضافة حدث عند النقر على زر العرض
        showButton.addEventListener("click", function () {
            groups.classList.toggle("active");
        });

        // إضافة حدث عند النقر على زر الإغلاق
        closeButton.addEventListener("click", function () {
            groups.classList.remove("active");
        });
    </script>
</html>
