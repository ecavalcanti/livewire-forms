<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Registration
            </h2>
        </div>
        <form class="mt-8 space-y-6" wire:submit.prevent="register">
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="py-2">
                    <x-my-input label="Name" model="name" type="text" placeholder="Type your name..."/>
                </div>

                <x-my-input label="Email" model="email" type="text" placeholder="Type your email..."/>

                <div class="py-2">
                    <x-my-input label="Password" model="password" type="password" placeholder="Type your password..."/>                
                </div>
                <x-my-input label="Password Confirmation" model="password_confirmation" type="password" placeholder="Confirme your password..."/>
            </div>

            <x-my-button text="Sign Up" />
        </form>
    </div>
</div>
