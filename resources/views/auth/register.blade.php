<x-layout>
    <form action="/register" method="POST">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mt-3 m-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Name</label>
            <input class="input" name="name" placeholder="Your Name" required/>

            <label class="label">Name</label>
            <input type="email" name="email" class="input" placeholder="Your E-mail" required/>

            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required/>

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>

</x-layout>
