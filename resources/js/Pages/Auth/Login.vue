<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />
 <!-- Start Hero -->
 <section class="bg-home d-flex align-items-center" style="background: url('images/hero/login.webp') center;">
            <div class="bg-overlay bg-linear-gradient-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="p-4 bg-white rounded shadow-md mx-auto w-100" style="max-width: 400px;">
                            <form @submit.prevent="submit">
                                <Link :href="route('home')"><img src="images/logo-dark.png" class="mb-4 d-block mx-auto" alt=""></Link>
                                <h6 class="mb-3 text-uppercase fw-semibold"></h6>
                            
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Correo</label>
                                    <input v-model="form.email" type="email" name="email" id="email" class="form-control" placeholder="example@website.com">
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="loginpass">Contraseña</label>
                                    <input v-model="form.password" type="password" class="form-control" id="loginpass" placeholder="Password">
                                    <InputError class="mt-2" :message="form.errors.password" />
                                </div>
                            
                                <div class="d-flex justify-content-between">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input v-model="form.remember" type="checkbox" class="form-check-input" value="" id="flexCheckDefault">
                                            <label class="form-label form-check-label text-muted" for="flexCheckDefault">Recordar</label>
                                        </div>
                                    </div>
                                    <span class="forgot-pass text-muted small mb-0"><Link v-if="canResetPassword" :href="route('password.request')" class="text-muted">Olvidaste la contraseña ?</Link></span>
                                </div>
                
                                <button class="btn btn-primary w-100" type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Iniciar Sesión</button>

                                <div class="col-12 text-center mt-3">
                                    <span><span class="text-muted me-2 small">No tienes cuenta ?</span> <Link :href="route('register')" class="text-dark fw-semibold small">Registrar</Link></span>
                                </div><!--end col-->
                            </form>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- ENd Hero -->
</template>
