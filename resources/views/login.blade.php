<x-layout :title="'Login'" :navbar="'false'">
    <div class="flex w-full h-screen justify-center items-center bg-gray-200">
        <form action="" method="POST" class="bg-white rounded-xl shadow-2xl p-6">
            @csrf
            <div class="py-2">
                <h1 class="text-center text-2xl font-bold">NasiWi</h1>
            </div>
            <div class="space-y-4">
                <div class="mt-5">
                    <label for="email">Email / Username</label>
                    <input type="text" id="email" name="email" placeholder="example@gamil.com"
                        class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div class="mt-5">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Secrate"
                        class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div class="flex justify-between px-2">
                    <a href="" class="text-sm text-purple-900 hover:underline">Lupa password</a>
                    <a href="/register" class="text-sm text-purple-900 hover:underline">Daftar</a>
                </div>
                <button type="submit"
                    class="mt-5 bg-blue-500 hover:bg-blue-600 text-white w-full py-2 rounded-lg">Login</button>
            </div>
        </form>
    </div>
</x-layout>
