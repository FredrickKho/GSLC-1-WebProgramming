@extends('template')
@section('content')
    <div class="intro" style="min-height:80vh">
        <div class="head-intro bg-light d-flex flex-column justify-content-center"
            style="min-height:70vh ; background-image : url({{ url('image/home-intro-bg.jpg') }}); background-size:100% 100%; background-repeat:no-repeat; ">
            <h1 class="text-white text-center" style="text-shadow: 1px 1px 4px black">Sibeh Ho Ciak</h1>
            <h4 class="text-white text-center" style="font-style:italic ; text-shadow: 1px 1px 4px black">Making people happy
                with delicious food</h4>
        </div>
        <div class="content-intro  pt-3 m-0" style="text-align: justify">
            <p class="mx-auto w-75">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nulla tortor, interdum vitae euismod quis,
                consectetur sit amet magna. Aliquam venenatis purus vestibulum diam suscipit, sit amet tincidunt nunc
                vulputate.
                Donec ullamcorper dapibus egestas. Aliquam sem neque, mollis et dui vitae, suscipit tristique urna. Morbi
                pharetra venenatis arcu. Vivamus suscipit blandit ligula non lacinia. Donec egestas velit velit, eget
                gravida ex
                volutpat vitae. Donec mattis ipsum ac pellentesque convallis. Praesent scelerisque nulla felis, quis euismod
                tortor egestas et. Curabitur eu interdum tellus, eu imperdiet metus. Nullam euismod facilisis sapien, et
                elementum nibh cursus quis. Integer scelerisque ac nulla sed eleifend. Cras blandit consequat sem, a porta
                ipsum
                pharetra ut. Quisque venenatis lectus a lorem mattis aliquam. Integer elementum nisl eget metus finibus,
                scelerisque tempor lectus condimentum. Mauris vestibulum malesuada justo, lobortis efficitur neque volutpat
                at.
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse nisl purus, mattis a facilisis
                sed,
                semper placerat erat. Duis vitae enim eget dolor blandit scelerisque. Sed luctus, ligula a vulputate
                imperdiet,
                elit sem auctor tortor, non rutrum eros purus sed felis. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Praesent libero ante, vestibulum eget varius sit amet, tincidunt quis libero. Quisque nisi elit,
                eleifend
                in libero ut, consequat placerat mi. Maecenas viverra felis viverra, tempor tellus nec, dictum dolor.
                Curabitur
                quis lobortis mauris. Nunc eros sem, cursus eget tempor nec, egestas sed magna. Nulla scelerisque ornare
                efficitur. Nunc eget odio justo.
            </p>

            <div class="text-light d-flex justify-content-center align-items-center"
                style="text-shadow:0px 0px 3px black; min-height:60vh; width:100%; background-image : url({{ url('image/kitchen-bg.jpg') }}); background-size: 100% 100%; backgound-repeat:no-repeat">
                <h2 class="text-black text-center" style="font-style:italic">What can we do for you ?</h2>
            </div>
            <p class="mx-auto w-75 pt-3">
                Aliquam in faucibus quam, sit amet porta mi. Pellentesque a mauris ex. Quisque facilisis, nisl ac tempor
                efficitur, nunc ante tristique purus, sit amet sollicitudin ligula est at dolor. Aliquam pellentesque felis
                justo, nec aliquam mauris gravida sit amet. Aliquam ullamcorper augue eu ipsum efficitur, id ornare massa
                aliquam. Aliquam erat volutpat. Aenean vehicula gravida ante in lacinia. Class aptent taciti sociosqu ad
                litora
                torquent per conubia nostra, per inceptos himenaeos. Mauris nec dignissim nunc. Quisque finibus ligula vitae
                blandit pretium.

                Duis efficitur mag na turpis, vitae sodales ante pulvinar sed. Quisque accumsan, nibh a lacinia mollis, ante
                eros
                eleifend mi, at commodo sem nibh tincidunt dui. Etiam rutrum mauris vel massa fringilla consectetur. Etiam
                vitae
                mollis sapien, at convallis magna. In luctus libero nec mollis sagittis. Donec vel lacus purus. Donec
                consectetur, velit eget tempor maximus, nunc risus volutpat purus, a semper neque tortor et dolor.
                Suspendisse
                potenti. Pellentesque tristique, dui quis auctor aliquet, metus erat fermentum est, sagittis suscipit arcu
                tortor at tellus. Aenean rutrum malesuada facilisis.

                Morbi a eros a est pretium interdum. Suspendisse potenti. Sed varius nunc mauris, in aliquam nisi bibendum
                ut.
                Aliquam finibus turpis vitae metus porttitor mattis. Praesent vulputate massa eu ullamcorper vehicula. Fusce
                metus justo, egestas vitae imperdiet quis, bibendum a sapien. Nulla facilisi. Nulla fermentum leo et maximus
                dapibus. Maecenas blandit tristique tellus, at condimentum sem pharetra a. Vivamus sit amet fermentum lorem.
            </p>
        </div>
        @include('contact')
    </div>
@endsection
