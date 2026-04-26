<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});


</script>

<template>
    <div class="mx-auto container"> 
       
              

                <main class="mt-6">
                    <div class="flex justify-center bg-red-50 p-10">
                    <div class="h-[30rem] w-[60rem] bg-gray-100 rounded-lg shadow-md flex overflow-hidden">
        
                        <div class="flex-1 p-10 flex flex-col justify-center items-center text-center">
                            <h2 class="text-2xl font-bold mb-4">Welcome</h2>
                            <p class="text-gray-600">
                                This is a simple site for testing Laravel Inertia Vue3 stack. 
                                You can add your content here to explain your project to the user.
                            </p>
                            <span>Here we are using laravel version {{ laravelVersion }}</span>
                            <span>Here we are using php version {{ phpVersion }}</span>
                        </div>

                        <div class="flex-1 p-10 bg-white border-l flex flex-col justify-center items-center shadow-inner">
    
                            <div v-if="$page.props.auth.user" class="text-center space-y-4">
                                <h3 class="text-lg font-semibold">Welcome back, {{ $page.props.auth.user.name }}!</h3>
                                <p class="text-sm text-gray-500">You are currently logged in.</p>
                                
                                <Link 
                                    href="/dashboard" 
                                    class="block w-full text-center py-2 bg-green-600 text-white rounded hover:bg-green-700 transition"
                                >
                                    Go to Dashboard
                                </Link>
                              
                                <Link 
                                    href="/logout" 
                                    method="post"
                                    as="button"
                                    class="block w-full text-center py-2 text-red-600 hover:text-red-800 transition"
                                >
                                    Logout
                                </Link>
                            </div>

                            <div v-else class="w-full max-w-xs space-y-4">
                                <h3 class="text-xl font-semibold mb-6 text-center">Authentication</h3>
                                
                                <Link 
                                    href="/login" 
                                    class="block w-full text-center py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
                                >
                                    Login
                                </Link>

                                <Link 
                                    href="/register" 
                                    class="block w-full text-center py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition"
                                >
                                    Register
                                </Link>
                            </div>

                        </div>
        

                    </div>
                    </div>
                                
               
                </main>

               
      
    </div>
</template>
