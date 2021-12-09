<?php //require_once './View/includes/header.php';
//?>
<!--<div class="w-full max-w-screen-sm mx-auto my-12">-->
<!--    <div class="w-full h-96 mx-4 my-4 px-6 py-6 border border-gray-300 shadow-xl">-->
<!--        Class overview:<br>-->
<!--        --><?php //echo $classroom[0]['name']; ?>
<!--        --><?php //echo $classroom[0]['location'];?>
<!--        <br>-->
<!--        Teacher: <br>-->
<!--        --><?php //echo $classTeach[0]["firstname"];?>
<!--        --><?php //echo $classTeach[0]["lastname"];?>
<!---->
<!--        <br><br>-->
<!--        Enrolled students:<br>-->
<!--        --><?php
//        foreach($students->getStudentByClassroom($_GET['id']) as $student)
//        {
//        echo $student['firstname'];
//        echo $student['lastname']."<br>";
//        echo $student['email']."<br>";
//        echo $student['phone']."<br>"."<br>";
//        }
//        ?>
<!--    </div>-->
<!--</div>-->


<?php require_once './View/includes/header.php'; ?>

<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

    <!--Main Col-->
    <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


        <div class="p-4 md:p-12 text-center lg:text-left">
            <!-- Image for mobile view-->
            <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('../../assets/images/default-profile.jpg')"></div>

            <h1 class="text-3xl font-light pt-8 lg:pt-0">  Class overview: <?php echo $classroom[0]['name']; ?> <?php echo $classroom[0]['location']; ?></h1>
            <div class="mx-auto lg:mx-0 w-4/5 pt-3 mb-6 border-b-2 border-blue-500 opacity-25"></div>
            <p class="py-4 text-base flex items-center justify-center lg:justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-gray-600 pr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                </svg>
                Teacher:

                <a href="./teacher.php?view=teacher&id=<?php echo $classTeach[0]['id']; ?>">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 hover:bg-green-200 text-green-800">
                    <?php echo $classTeach[0]["firstname"];?>
                    <?php echo $classTeach[0]["lastname"];?>
                </span>
                    </a>
            </p>
            <p class="py-4 text-base flex items-center justify-center lg:justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-gray-600 pr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>
                Class:  
                <a href="classroom.php?view=classroom&id=<?php echo $classroom[0]['id']; ?>" class="text-blue-400 hover:text-blue-500 hover:underline">
                    <?php echo $classroom[0]['name']; ?>
                </a>
            </p>
            <div  class="pt-12 pb-8">
                <a href="classroom.php?view=update&id=<?php echo $classroom[0]['id']; ?>">
                    <button class="bg-yellow-600 hover:bg-yellow-800 border border-yellow-900 text-white font-bold py-2 px-8 mx-2 rounded-full">
                        Update
                    </button>
                </a>
                <a href="classroom.php?view=delete&id=<?php echo $classroom[0]['id']; ?>">
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
<div class="flex flex-col max-w-screen-2xl mx-auto my-12">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-300 sm:rounded-lg">
                <table class="min-w-full disvide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold text-gray-700 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium  text-gray-700 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                            Class
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach($students->getStudentByClassroom($_GET['id']) as $student): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <!--                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">-->
                                    <img class="h-10 w-10 rounded-full" src="./assets/images/default-profile-small.jpg" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        <?php echo $student['firstname']; ?> <?php echo $student['lastname']; ?>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?php echo $student['email']; ?></div>
                            <!--                <div class="text-sm text-gray-500">Optimization</div>-->

                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <?php echo $student['phone']; ?></div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <a href="./classroom.php?view=classroom&id=<?php echo $classroom[0]['id']; ?>">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 hover:bg-green-200 text-green-800">
                    <?php echo $classroom[0]['name']; ?>
                </span>
                </a>
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                <a href="./?view=update&id=<?php echo $student['id']; ?>">
                    <button class="h-10 text-xm px-3 mx-2 inline-block bg-blue-500 hover:bg-blue-600 border border-blue-700 rounded-full text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </button>
                </a>

                <a href="./?view=student&id=<?php echo $student['id']; ?>">
                    <button class="h-10 text-xm px-3 mx-2 inline-block bg-green-500 hover:bg-green-600 border border-green-700 rounded-full text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </a>
                <a href="./?view=delete&id=<?php echo $student['id']; ?>">
                    <button class="h-10 text-xm px-3 mx-2 inline-block bg-red-700 hover:bg-red-800 border border-red-900 rounded-full text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </a>

            </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php require_once './View/includes/footer.php'; ?>
