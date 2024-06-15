@extends('layouts.app')

@section('content')
    <x-form class="bg-neutral-100">
        <div class="w-full bg-zinc-800 inline-flex">
            <div class="w-14 h-14 tablet:w-16 tablet:h-16 bg-neutral-700">
                <svg class="mx-auto my-4 tablet:my-6 cursor-pointer" width="30" height="18" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#FFF"
                       fill-rule="evenodd">
                        <path d="M0 0h30v2H0zM0 8h30v2H0zM0 16h30v2H0z"/>
                    </g>
                </svg>
            </div>
            <div class="inline-flex w-full h-14 items-center  justify-between tablet:mx-6">
                <div class="inline-flex items-center space-x-2 w-full">
                <svg  width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.107 3.393c.167.167.31.393.429.678.119.286.178.548.178.786v10.286c0 .238-.083.44-.25.607a.827.827 0 0 1-.607.25h-12a.827.827 0 0 1-.607-.25.827.827 0 0 1-.25-.607V.857C0 .62.083.417.25.25A.827.827 0 0 1 .857 0h8c.238 0 .5.06.786.179.286.119.512.261.678.428l2.786 2.786ZM9.143 1.214v3.357H12.5c-.06-.172-.125-.294-.196-.366L9.509 1.411c-.072-.072-.194-.137-.366-.197Zm3.428 13.643V5.714H8.857a.827.827 0 0 1-.607-.25.827.827 0 0 1-.25-.607V1.143H1.143v13.714H12.57Z"
                        fill="#FFF"/>
                </svg>
                <div class="flex flex-col space-x-2">
                    <x-label class="mobile:hidden tablet:block ml-5  mt-4 text-xs text-zinc-500 font-light"
                             for="document_name">Document
                        Name</x-label>
                <x-input class="bg-zinc-800 text-white border-none focus:outline-none focus:ring-0 tablet:w-full"
                         type="text"
                         name="document_name"
                         placeholder="Document.md"/>
                </div>
                </div>

                <div class="inline-flex items-center space-x-2">
                    <svg class="cursor-pointer" width="18" height="20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 16a1 1 0 0 0 1-1V9a1 1 0 1 0-2 0v6a1 1 0 0 0 1 1ZM17 4h-4V3a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v1H1a1 1 0 1 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V6h1a1 1 0 0 0 0-2ZM7 3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1H7V3Zm7 14a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6h10v11Zm-3-1a1 1 0 0 0 1-1V9a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"
                            fill="#7C8187"/>
                    </svg>
                    <x-form-button class="bg-red-500 inline-flex justify-center  space-x-2 items-center w-10 h-10
                    tablet:w-36
                    rounded
                    cursor-pointer">
                        <svg class="mx-auto tablet:mx-0  cursor-pointer" width="17" height="17" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.91 5.931 10.575.598A.889.889 0 0 0 10.29.41.969.969 0 0 0 9.945.34H2.834A2.667 2.667 0 0 0 .167 3.007v10.666a2.667 2.667 0 0 0 2.667 2.667H13.5a2.667 2.667 0 0 0 2.667-2.667v-7.11a.889.889 0 0 0-.258-.632ZM5.5 2.118h3.556v1.778H5.5V2.118Zm5.334 12.444H5.5v-2.666c0-.491.398-.89.89-.89h3.555c.49 0 .889.399.889.89v2.666Zm3.555-.889c0 .491-.398.89-.889.89h-.889v-2.667a2.667 2.667 0 0 0-2.666-2.667H6.389a2.667 2.667 0 0 0-2.666 2.667v2.666h-.89a.889.889 0 0 1-.888-.889V3.007c0-.491.398-.89.889-.89h.889v2.667c0 .491.398.89.888.89h5.334c.49 0 .889-.399.889-.89V3.371l3.555 3.556v6.746Z"
                                fill="#FFF"/>
                        </svg>
                        <p class="mobile:hidden tablet:block text-sm text-white">Save</p>
                    </x-form-button>
                </div>
            </div>
        </div>
        <div x-data="{ showPreview: false}">
    <div class="w-full h-10 bg-neutral-100 text-zinc-500 flex items-center justify-around tablet:justify-between
    tablet:px-4">
        <p x-show="!showPreview" class="text-sm font-medium tracking-widest mx-4">MARKDOWN</p>
        <p x-show="showPreview" class="text-sm font-medium tracking-widest mx-4">PREVIEW</p>
        <svg @click="showPreview = !showPreview" x-show="!showPreview" class="cursor-pointer"  width="16" height="12" xmlns="http://www.w3.org/2000/svg">
            <path  d="M7.784.003c4.782-.144 7.597 4.31 8.109 5.198a.8.8 0 0 1 0 .8c-.688 1.2-3.255 5.086-7.677 5.198h-.2c-4.71 0-7.405-4.326-7.909-5.198a.8.8 0 0 1 0-.8C.803 4.001 3.362.115 7.784.003Zm.38 1.6h-.3c-3.199.08-5.286 2.71-6.086 3.998C2.482 6.73 4.73 9.68 8.176 9.6c3.199-.08 5.262-2.711 6.086-3.999-.712-1.127-2.967-4.086-6.398-3.998ZM8 2.803A2.799 2.799 0 1 1 8 8.4a2.799 2.799 0 0 1 0-5.598Zm0 1.599A1.2 1.2 0 1 0 8 6.8a1.2 1.2 0 0 0 0-2.4Z" fill="#7C8187"/>
        </svg>
        <svg @click="showPreview = !showPreview" x-show="showPreview"  class="cursor-pointer" width="16" height="15" xmlns="http://www.w3.org/2000/svg"><path d="M1.38.027a
        .795.795 0 0 1 .769
        .206L14.815 12.9a.792.792 0 0 1 0 1.124.792.792 0 0 1-1.124 0L9.234 9.567a2.77 2.77 0 0 1-3.753-3.753L1.024 1.357a.795.795 0 0 1 .357-1.33Zm.998 3.832 1.156 1.116a10.846 10.846 0 0 0-1.773 2.153c.696 1.117 2.929 4.038 6.333 3.959a6.127 6.127 0 0 0 1.346-.198l1.25 1.25a7.505 7.505 0 0 1-2.556.53h-.198c-4.663 0-7.331-4.282-7.83-5.145a.792.792 0 0 1 0-.792A12.58 12.58 0 0 1 2.378 3.86Zm5.328-2.272c4.726-.143 7.52 4.267 8.028 5.145.15.24.163.542.031.792a12.58 12.58 0 0 1-2.304 2.874l-1.195-1.116a10.846 10.846 0 0 0 1.813-2.154c-.705-1.116-2.937-4.045-6.333-3.958a6.127 6.127 0 0 0-1.346.198L5.149 2.117a7.505 7.505 0 0 1 2.557-.53Zm-.974 5.486v.055c0 .656.532 1.188 1.188 1.188l.047-.008-1.235-1.235Z" fill="#7C8187"/></svg>

    </div>
<div class="tablet:inline-flex ">
    <div>
            <x-textarea x-show="!showPreview" id="markdown" name="markdown" class="w-full mx-auto h-screen p-4 bg-white
            text-neutral-700 border-none outline-none resize-none text-sm focus:ring-0 font-['Roboto Mon'o']"
                        placeholder="Write your Markdown
            here"></x-textarea>
    </div>
            <div x-show="showPreview" class="w-full h-screen p-4 bg-white text-neutral-700 text-sm" id="preview">
                hELLO wORLD
            </div>
</div>

        </div>
    </x-form>

@endsection

