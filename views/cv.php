<?php require 'partials/header.php'; ?>
    <div class="min-h-full">
        <?php require 'partials/nav.php'; ?>
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">CV</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="w-full flex justify-center">
                    <a class="bg-[#ff914d] hover:bg-[#ff690D] text-white font-semibold py-2 px-4 border border-[#ff6000]
                     rounded shadow sm:px-10" href="/assets/JW-External-CV.pdf" download="JW-External-CV">
                        Download My CV
                    </a>
                </div>
                <div class="pt-3">
                    <div class="py-2">
                        Passionate and enthusiastic recent Computer Science graduate, and proven team-player, with
                        experience across the full development stack in a range of languages. Looking to join a team-based
                        environment to continue to grow my software engineering expertise.
                    </div>
                    <div class="py-2">
                        <div class="py-0.5 text-xl font-bold">Skills Summary</div>
                        <hr class="bg-black h-[3px] mb-2">
                        <div class="py-0.5">Most Proficient Programming Languages -- Python, Java</div>
                        <div class="py-0.5">Other Languages -- Go, JavaScript, TypeScript, HTML, PHP, SQL, Haskell, Prolog, CSS</div>
                        <div class="py-0.5">Technical Skills -- Google Workspace Suite, Microsoft Office Suite, Git, Jet Brains Suite</div>
                        <div class="py-0.5">Operating Systems -- macOS, Windows, Linux</div>
                    </div>

                    <!--
                    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
                    \sectitle{\textbf{Education}}

                    \textBF{Degree -- BSc} in Computer Science, {University of Exeter, UK}\hfill {Sept 2019 - July 2023}
                    \begin{itemize}
                    \item Grade: Class II Division II
                    \item Key Areas and Modules: Software Development, Microservices, Enterprise Computing, Data Structures, Algorithms, Web Development, Machine Learning, Security, Java, Python, Graphics, Databases
                    \end{itemize}

                    \textBF{Secondary} -- {Bryanston School, UK}\hfill {Sept 2014 - July 2019}
                    \begin{itemize}
                    \item A Levels: Maths, Physics, Further Maths (with 2 As and 1 C)
                    \item GCSEs: 11 (with 5 A$^\ast$s and 2 As)
                    \end{itemize}

                    \textBF{Self-Study} -- {Pembrokeshire College, Online}\hfill {Sept 2017 - July 2019}
                    \begin{itemize}
                    \item A Level: Computer Science
                    \end{itemize}

                    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

                    \sectitle{\textbf{Employment History}}

                    \textBF{Community Coworking Ltd} -- Operations Manager\hfill {May 2024 - Present}
                    \begin{itemize}
                    \item Researched and consulted on technological issues and implemented solutions
                    \item Managed marketing communications, student registration and bookings
                    \item Created company and site policies and risk assessments
                    \item Researched and implemented UK GDPR complaint solutions for collecting, managing and holding customer data.
                    \item Designed office layout and managed infrastructure installations (WiFi, TVs, furniture).
                    \item Coordinated building services (waste, water, cleaning)
                    \item Handled operations based communication with partner companies\newline
                    \end{itemize}

                    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

                    \sectitle{\textbf{Projects}}

                    \textBF{University Chat Forum} \emph{| {Group Software Development Coursework}}\hfill {Feb 2021 - March 2021}
                    \begin{itemize}
                    \item Chat Forum that combined informal communication between students with official module and society Announcements and discussions
                    \item Used the Kanban software development methodology to create a publicly hosted website built with PHP and JavaScript connected to a MySQL Database
                    \item The site was designed to be the singular chat forum and announcement page for university students with three main sections for Academic, Societies and Community.
                    \item The site is capable of having individual user accounts, each with associated levels, privileges and subscribed clubs. Each post can have comments and multiple layers of sub-comments, all with respective up and down voting capability.
                    \item Languages: PHP, HTML, JavaScript, CSS, SQL\newline
                    \end{itemize}


                    \textBF{Financial Management Software for Student Clubs and Societies} \emph{| {Final Year Project}}\hfill {Oct 2022 - March 2023}
                    \begin{itemize}
                    \item A free, focused Financial Management Software that is optimised for use by Student Clubs and Societies where current market options are unsuited and overpriced
                    \item Desktop application built on the Swing GUI Framework
                    \item Languages: Java
                    \end{itemize}

                    \textBF{Virtual Assistant} \emph{| {Coursework}}\hfill {Feb 2022 - March 2022}
                    \begin{itemize}
                    \item Implemented a group of Microservices to create a virtual assistant that can respond to verbal questions
                    \item Developed in GoLand and uses the Microsoft TTS and STT APIs for audio conversion and the Wolfram Alpha Short Answer API for answering the questions.
                    \item Languages: Go
                    \end{itemize}

                    \textBF{Android Weather App} \emph{| {Coursework}}\hfill {March 2021}
                    \begin{itemize}
                    \item Created a Weather app for Android devices that utilises the Open Weather Map API to show daily and hourly weather for a chosen location.
                    \item The app makes use of shared preferences to maintain last used location and other features such as multiple activities, menus and implicit and explicit intents
                    \item Developed in Android Studio with Gradle
                    \item Languages: Java
                    \end{itemize}

                    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
                    \sectitle{\textbf{Volunteering and Leadership}}

                    \textBF{Exeter} University Boat Club -- {President (22/23) \& Treasurer (21/22)}\hfill {July 2021 - July 2023}
                    \begin{itemize}
                    \item President -- Enhanced the club's internal operations and led the creation of a long-term development plan
                    \item Treasurer -- Used technical skills to revamp the clubs financial management processes and financial plan
                    \item Athletic Union Club Award -- For outstanding contribution towards university sport
                    \end{itemize}

                    \textBF{Bryanston} School Greenpower Challenge Team -- {Head of Electrical}\hfill {Sept 2015 - July 2019}
                    \begin{itemize}
                    \item Assisted in the design, construction and racing of an electric car in IET Formula 24+
                    \item Lead the design and implementation of all electronics including powertrain and telemetry
                    \end{itemize}

                    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

                    \sectitle{\textbf{Qualifications, Achievements and Interests}}

                    \textBF{Rowing} \hfill {Sept 2015 - Present}
                    \begin{itemize}
                    \item Exeter University 1st VIII 2019-2023
                    \item Competed at Henley Royal Regatta 4 times
                    \item Medalled at British Universities and Colleges Sport (BUCS) Events
                    \end{itemize}
                    \par
                    \textBF{IQL Level 3 Award in Emergency First Aid at Work} \hfill {Sep 2022}
                    \par
                    \textBF{RYA Dayskipper Qualification} \hfill {Oct 2021}
                    \par
                    \textBF{RYA Powerboat 2 Qualification} \hfill {Apr 2015}
                    \par
                    \textBF{Boating, Mountaineering, Cycling}-->
                </div>
            </div>
        </main>
    </div>
<?php require 'partials/footer.php'; ?>