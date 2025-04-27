<div class="max-w-3xl mx-auto mt-[4rem] p-8 bg-white rounded-xl shadow-md border border-slate-200 font-displayHat">
    <h2 class="text-3xl font-extrabold text-center text-blue-500 uppercase mb-8">Registrar Cliente</h2>

    <form action="" method="POST" class="space-y-8">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Razón Social -->
            <div class="relative">
                <input type="text" name="razon_social" id="razon_social" 
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Razón Social" required />
                <label for="razon_social"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Razón Social
                </label>
            </div>

            <!-- RFC -->
            <div class="relative">
                <input type="text" name="rfc" id="rfc"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="RFC" required />
                <label for="rfc"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    RFC
                </label>
            </div>

            <!-- Email -->
            <div class="relative">
                <input type="email" name="email" id="email"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Correo electrónico" />
                <label for="email"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Correo electrónico
                </label>
            </div>

            <!-- Teléfono -->
            <div class="relative">
                <input type="text" name="telefono" id="telefono"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Teléfono" />
                <label for="telefono"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Teléfono
                </label>
            </div>

            <!-- Uso CFDI -->
            <div class="relative">
                <input type="text" name="uso_cfdi" id="uso_cfdi"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Uso CFDI" />
                <label for="uso_cfdi"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Uso CFDI
                </label>
            </div>

            <!-- Calle -->
            <div class="relative">
                <input type="text" name="calle" id="calle"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Calle" />
                <label for="calle"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Calle
                </label>
            </div>

            <!-- Número exterior -->
            <div class="relative">
                <input type="text" name="numero_exterior" id="numero_exterior"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Número exterior" />
                <label for="numero_exterior"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Número exterior
                </label>
            </div>

            <!-- Número interior -->
            <div class="relative">
                <input type="text" name="numero_interior" id="numero_interior"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Número interior" />
                <label for="numero_interior"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Número interior
                </label>
            </div>

            <!-- Colonia -->
            <div class="relative">
                <input type="text" name="colonia" id="colonia"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Colonia" />
                <label for="colonia"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Colonia
                </label>
            </div>

            <!-- Código Postal -->
            <div class="relative">
                <input type="text" name="codigo_postal" id="codigo_postal"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Código Postal" />
                <label for="codigo_postal"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Código Postal
                </label>
            </div>

            <!-- Municipio -->
            <div class="relative">
                <input type="text" name="municipio" id="municipio"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Municipio" />
                <label for="municipio"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Municipio
                </label>
            </div>

            <!-- Estado -->
            <div class="relative">
                <input type="text" name="estado" id="estado"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="Estado" />
                <label for="estado"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    Estado
                </label>
            </div>

            <!-- País -->
            <div class="relative">
                <input type="text" name="pais" id="pais"
                       class="peer w-full border-b-2 border-gray-300 bg-transparent py-2 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                       placeholder="País" value="México" readonly />
                <label for="pais"
                       class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all 
                              peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                              peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-gray-600">
                    País
                </label>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="mt-10 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition-all">
                Registrar Cliente
            </button>
        </div>
    </form>
</div>
