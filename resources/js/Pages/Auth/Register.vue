<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />
    <section class="bg-home d-flex align-items-center" style="background: url('images/hero/register.webp') center;">
            <div class="bg-overlay bg-linear-gradient-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="p-4 bg-white rounded shadow-md mx-auto w-100" style="max-width: 400px;">
                            <form @submit.prevent="submit">
                                <a href="index.html"><img src="images/logo-dark.png" class="mb-4 d-block mx-auto" alt=""></a>
                                <h6 class="mb-3 text-uppercase fw-semibold">Register your account</h6>
                            
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tu nombre</label>
                                    <input v-model="form.name" type="text" name="name" id="name" class="form-control" placeholder="Calvin Carlo">
                                    <InputError class="mt-2" :message="form.errors.name" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tu correo</label>
                                    <input v-model="form.email" type="email" name="email" id="email" class="form-control" placeholder="example@website.com">
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="loginpass">Contraseña</label>
                                    <input v-model="form.password" type="password" class="form-control" id="loginpass" placeholder="Password">
                                    <InputError class="mt-2" :message="form.errors.password" />
                                </div>
                            
                                <div class="form-check mb-3">
                                    <input v-model="form.terms" type="checkbox" name="terms" class="form-check-input" value="" id="flexCheckDefault">
                                    <label class="form-label form-check-label text-muted" for="flexCheckDefault">Accepto <a  class="text-primary">Terminos y condiciones</a></label>
                                </div>
                
                                <button type="submit" class="btn btn-primary w-100" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Registrar</button>

                                <div class="col-12 text-center mt-3">
                                    <span><span class="text-muted small me-2">Ya tienes cuenta ? </span> <Link :href="route('login')" class="text-dark fw-semibold small">Iniciar Sesion</Link></span>
                                </div><!--end col-->
                            </form>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
</template>
