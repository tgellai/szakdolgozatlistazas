<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="szakdolgozatoklistazasa">

                        <div class="lista">
                            <div class="fejlec">
                                <div class="szakdogacime">Szakdolgozat címe</div>
                                <div class="tagok">Készítők neve</div>
                                <div class="githublink">GitHub link</div>
                                <div class="oldallink">Szakdolgozat elérhetősége</div>
                            </div>




                        </div>
                    </div>

<aside class="gyerek">
            <table>
                <tr>
                    <td class="szakdoga_nev">Szakdolgozat neve</td>
                    <td class="githublink">Githublink</td>
                    <td class="oldallink">Oldallink</td>
                    <td class="tagokneve">Tagokneve</td>
                    <td><button type="button" class="torol">Törlés</button></td>
                    <td><button type="button" class="modosit">Módosítás</button></td>
                </tr>
            </table>
        </aside>
        <section class="szulo">
            <table cellspacing="0">
            <tbody>
                <thead>
                    <tr>
                        <th>Szakdolgozat neve<m/th>
                        <th>Githublink</th>
                        <th>Oldallink</th>
                        <th>Tagokneve</th>
                    </tr>
                </thead>
                </tbody>
            </table>
            </section>

                    <div class="ujadat">
                        <form>
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" id="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" id="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" id="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" id="githublink"></div>
                            <div class="gomb"><button id="uj">Új</button>
                                <button id="modosit">Módosít</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
