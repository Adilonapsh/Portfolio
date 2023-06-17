<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Portfolio') }} / {{ __('Create') }}
        </h2>
    </x-slot>
    <div class="lg:p-10 dark:text-white transition-all">
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <form action="{{ route('portfolio.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="nama_aplikasi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Nama Aplikasi') }}</label>
                    <input type="text" id="nama_aplikasi" name="app_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nama Aplikasi" required>
                </div>
                <div class="grid grid-cols-2 gap-5 mb-6">
                    <div class="col-span-2">
                        <label for="icon_aplikasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Icon Aplikasi') }}</label>
                        <input type="file" id="icon_aplikasi" name="app_icon"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="icon_aplikasi">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="icon_aplikasi">Max: 2 Mb (.png)
                        </div>
                    </div>
                    <div>
                        <label for="url_aplikasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('URL Aplikasi') }}</label>
                        <input type="text" id="url_aplikasi" name="app_url"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="URL Aplikasi" required>
                    </div>
                    <div>
                        <label for="url_fork_aplikasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('URL Fork Aplikasi') }}</label>
                        <input type="text" id="url_fork_aplikasi" name="app_url_fork"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="URL Fork Aplikasi" required>
                    </div>
                    <div class="col-span-2">
                        <label for="gambar_aplikasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Gambar Aplikasi') }}</label>
                        <input type="file" id="gambar_aplikasi" name="app_photos[]"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="icon_aplikasi" multiple>
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="icon_aplikasi">Max: 2 Mb (.jpg)
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi_singkat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Deskripsi Singkat') }}</label>
                        <input type="text" id="deskripsi_singkat" name="short_desc"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Deskripsi Singkat" required>
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Deskripsi') }}</label>
                        <textarea id="deskripsi" rows="4" name="desc"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Deskripsi Lengkap"></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="tags_aplikasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Tag Aplikasi') }}</label>
                        <select id="tags_aplikasi" name="tags[]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            multiple>
                            <option value="Website">Website</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Stream">Stream</option>
                            <option value="Arduino">Arduino</option>
                            <option value="Bots">Bots</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="fitur_aplikasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Fitur Aplikasi') }}</label>
                        <select id="fitur_aplikasi" name="feature[]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            multiple>
                            <option value="Laravel">Laravel</option>
                            <option value="Node Js">Node Js</option>
                            <option value="Postgresql">Postgresql</option>
                            <option value="Nginx">Nginx</option>
                            <option value="Apache">Apache</option>
                            <option value="Arduino">Arduino</option>
                            <option value="C#">C#</option>
                            <option value="C++">C++</option>
                            <option value="Python">Python</option>
                            <option value="Java">Java</option>
                            <option value="Kotlin">Kotlin</option>
                            <option value="Dart">Dart</option>
                            <option value="PHP">PHP</option>
                            <option value="VB.Net">VB.Net</option>
                            <option value="HTML">HTML</option>
                            <option value="Javascript">Javascript</option>
                            <option value="CSS">CSS</option>
                            <option value="Tailwind">Tailwind</option>
                            <option value="Bootstrap">Bootstrap</option>
                            <option value="Flutter">Flutter</option>

                        </select>
                    </div>
                    <div>
                        <fieldset>
                            <div class="flex items-center mb-4">
                                <input id="checkbox-1" type="checkbox" name="visible_in_landing"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-1"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visible in
                                    Landing</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="checkbox-1" type="checkbox" name="link_to_app"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-1"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Link to
                                    App</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <button type="submit" class="bg-blue-600 p-2 rounded-lg text-white">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>
