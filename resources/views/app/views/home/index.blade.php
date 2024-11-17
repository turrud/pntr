<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
        <script type="text/javascript"
            src="https://app.stg.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    {{-- cdn flowbite --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    {{-- icon --}}
    <link rel="shortcut icon" href="{{ asset('icon/icon.png') }}" type="image/x-icon">
    <title>Pelosok Nusantara</title>
    <style>
        .font{
            font-family: 'Times New Roman';
        }

                .upload-container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 2px dashed #ccc;
            border-radius: 5px;
        }

        .preview-container {
            margin-top: 20px;
            text-align: center;
        }

        #imagePreview {
            max-width: 300px;
            max-height: 300px;
            margin-top: 10px;
            display: none;
        }

        .success-message {
            color: green;
            margin-top: 10px;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body class="font">


<nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('icon/icon.png') }}" class="h-10" alt="Logo" />
        <span class="self-center text-2xl  whitespace-nowrap dark:text-white">Pelosok Nusantara</span>
    </a>
    </div>
  </div>
</nav>

<div class="max-w-screen-md mx-auto my-8 p-6">
  <h1 class="text-2xl font-bold mb-10 justify-center flex">MEMBANGUN BRANDING BISNIS DESAIN</h1>
  <br>
  <p class="mb-6 text-justify">Selamat datang di acara Membangun Branding Bisnis Desain, sebuah kesempatan berharga bagi para profesional, akademisi, dan mahasiswa di bidang desain yang ingin mendalami strategi branding yang kuat untuk memperkuat daya saing dan nilai bisnis mereka.</p>
  <div class="mb-1">
    <p class="font-bold">Hari, Tanggal:</p>
    <p class="text-gray-500">Selasa, 19 November 2024</p>
  </div>
  <div class="mb-1">
    <p class="font-bold">Waktu:</p>
    <p class="text-gray-500">Pukul 14.00 WIB</p>
  </div>
  <div class="mb-6">
    <p class="font-bold">Tempat:</p>
    <a target="_blank" href="https://maps.app.goo.gl/EWyBfHj7BmfZiJaNA">
        <p class="text-gray-500">Kantor Dananjaya Design, Jl nusa indah IV, Cipagalo, Kec. Bojongsoang, Kabupaten Bandung</p>
    </a>
  </div>
  <p class="mb-6 text-justify">Peserta akan mendapatkan pemahaman mendalam dari para ahli tentang pentingnya branding dalam industri desain serta praktik terbaik yang relevan di dunia bisnis. Mari bergabung, peruas wawasan, dan bangun fondasi branding bisnis desain Anda bersama kami!</p>


  <div class="mb-6">
    <p class=" mb-2">Biaya pendaftaran adalah Rp.20.000,00 , untuk makan, minum, dan snack, serta sertifikat</p>
  </div>

  <p class="text-gray-500">Jangan lewatkan kesempatan ini untuk membangun koneksi dan belajar langsung dari para praktisi berpengalaman!</p>
</div>

<div>
    <form action="/" method="POST" enctype="multipart/form-data" class="max-w-screen-md mx-auto mt-10 my-8 p-6">
    @csrf
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="first_name" id="first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="last_name" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
        </div>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="organization" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Organization</label>
    </div>
     <div class="relative z-0 w-full mb-5 group">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Expectations follwing the event</label>
            <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a message..."></textarea>
        </div>

    <div class="grid md:grid-cols-2 md:gap-6">


        <div class="relative z-0 w-full mb-5 group">
            <label for="imageInput" class="block mb-2 text-sm font-medium text-gray-500">Upload Bukti Pembayaran</label>
            <input class="rounded-xl" type="file" name="image" id="imageInput" accept="image/*">
        </div>
        <div class="preview-container">
            <img style="width: 100px; height: 100px;" id="imagePreview" alt="Preview">
            <div id="message"></div>
        </div>



    </div>
    <div lass="grid md:grid-cols-2 md:gap-6">



    </div>


    <button id="pay-button" type="submit" class="text-white mt-5 mb-10 bg-gray-400 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">Submit</button>
</form>


</div>



<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/" class="hover:underline">Pelosok Nusantara™</a>. All Rights Reserved.
    </span>

    </div>
</footer>

    <!-- Modal untuk notifikasi -->
<div id="notification-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow animate__animated animate__fadeInDown">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Pelosok Nusantara
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="notification-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 text-center">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-green-500 animate__animated animate__bounceIn" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <p class="text-base leading-relaxed text-gray-500" id="modalMessage"></p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button data-modal-hide="notification-modal" type="button" class="text-white bg-gray-400 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">OK</button>
            </div>
        </div>
    </div>
</div>





{{-- cdn flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <script>
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');
        const uploadForm = document.getElementById('uploadForm');
        const message = document.getElementById('message');

        // Preview image before upload
        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.style.display = 'block';
                    imagePreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Handle form submission
        uploadForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    message.innerHTML = `<div class="success-message">${data.message}</div>`;
                } else {
                    message.innerHTML = `<div class="error-message">${data.message}</div>`;
                }
            })
            .catch(error => {
                message.innerHTML = '<div class="error-message">An error occurred during upload.</div>';
            });
        });

        @if (session()->has('success'))
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('notification-modal');
            const modalMessage = document.getElementById('modalMessage');
            modalMessage.textContent = '{{ session('success') }}';

            // Initialize the modal
            const notificationModal = new Modal(modal);

            // Show the modal
            notificationModal.show();

            // Auto hide after 3 seconds (optional)
            setTimeout(() => {
                notificationModal.hide();
            }, 5000);
        });
    @endif


    </script>

</body>
</html>
