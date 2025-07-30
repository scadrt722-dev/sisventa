<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/ed6122de6b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <?php include 'navbar.html'; ?>

    <?php include 'sidebar.html'; ?>

    <div class="min-h-screen pt-16 sm:ml-64">
        <div class="p-4">
            <div class="overflow-x-auto shadow-md rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre del Negocio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nit
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefono
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Direccion
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre del Propietario
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Numero de Identificacion
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                La Tienda de Juan
                            </th>
                            <td class="px-6 py-4">
                                123456789
                            </td>
                            <td class="px-6 py-4">
                                725-1234
                            </td>
                            <td class="px-6 py-4">
                                calle Falsa 123
                            </td>
                            <td class="px-6 py-4">
                                Juan Perez
                            </td>
                            <td class="px-6 py-4">
                                987654321
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-4">
                                 <a href="#" type="button" data-modal-target="UserModal" data-modal-show="UserModal" class="text-green-700 border border-green-700 hover:bg-green-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:focus:ring-green-800 dark:hover:bg-green-700"><i class="fa-solid fa-eye"></i></a>
                                
                                <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a data-modal-target="DeleteModal" data-modal-toggle="DeleteModal" href="#" type="button" data-modal-target="DeleteModal" data-modal-show="DeleteModal" class="text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-700 dark:hover:bg-red-700"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                            </td>



                        </tr>
              

                    </tbody>
                </table>
                <?php include 'EditarCliente.html'; ?>
                <?php include 'EliminarCliente.html'; ?>
                <?php include 'VerCliente.html'; ?>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>