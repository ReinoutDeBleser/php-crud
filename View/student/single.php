<?php require_once './View/includes/header.php'; ?>

    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

        <!--Main Col-->
        <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


            <div class="p-4 md:p-12 text-center lg:text-left">
                <!-- Image for mobile view-->
                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('../../assets/images/default-profile.jpg')"></div>

                <h1 class="text-3xl font-light pt-8 lg:pt-0"><?php echo $student[0]['firstname']; ?> <?php echo $student[0]['lastname']; ?></h1>
                <div class="mx-auto lg:mx-0 w-4/5 pt-3 mb-6 border-b-2 border-blue-500 opacity-25"></div>
                <p class="py-4 text-base flex items-center justify-center lg:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-gray-600 pr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                    </svg>
                    <?php echo $student[0]['email']; ?>
                </p>
                <p class="py-4 text-base flex items-center justify-center lg:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-gray-600 pr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                    </svg>
                    <?php echo $student[0]['phone']; ?>
                </p>

                <p class="py-4 text-base flex items-center justify-center lg:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-gray-600 pr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                    <a href="classroom.php?view=classroom&id=1" class="text-blue-400 hover:text-blue-500 hover:underline">
                        Lamarr 2.12
                    </a>
                </p>

                <div  class="pt-12 pb-8">
                    <a href="./?view=update&id=<?php echo $student[0]['id']; ?>">
                    <button class="bg-yellow-600 hover:bg-yellow-800 border border-yellow-900 text-white font-bold py-2 px-8 mx-2 rounded-full">
                        Update
                    </button>
                    </a>
                    <a href="./?view=delete&id=<?php echo $student[0]['id']; ?>">
                    <button class="bg-red-700 hover:bg-red-800 border border-red-900 text-white font-bold py-2 px-8 mx-2 rounded-full">
                        Delete
                    </button>
                    </a>
                </div>

            </div>

        </div>

        <div class="w-full lg:w-2/5">
            <img src="../../assets/images/default-profile.jpg" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">

        </div>

    </div>

<?php require_once './View/includes/footer.php'; ?>

<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
</svg>
