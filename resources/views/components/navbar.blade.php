<header id="header" class="main-header">
    <a href="/" class="logo">
        <span class="logo-mini">{{ $roles ?? '' }}</span>
        <span class="logo-lg">{{ $roles ?? '' }}</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        <span class="hidden-xs"> Akun Saya</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="user-header width: 50px; height: 50px;" >
                            <img src="{{ asset('images/icons/Logo.png') }}" class="img-circle" alt="User Image">
                            @stack('info')
                        </li>
                        <li class="user-footer">
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
{{--

@push('script')
    <script>
        const head = new Vue({
            el: '#header',
            data: {
                jumlahNotif: 0,
                notifications: {},

                user: {!! Auth::check() ? Auth::user()->toJson() : 'null' !!}
            },
            mounted() {

                this.getNotification();
                this.listen();
            },
            methods: {

                listen() {
                    Echo.channel('notification.' + this.user.id)
                        .listen('NewNotification', (notif) => {
                            console.log(notif);

                            this.jumlahNotif = notif.jumlah_notif;

                            this.notifications.unshift(notif);

                            var audio = new Audio('{{asset("resources/notif.mp3")}}');
                            const playPromise = audio.play();
                            if (playPromise !== null) {
                                playPromise.catch(() => {
                                    audio.play();
                                })
                            }
                        })
                },

                clickNotif: function (event) {

                    element = event.currentTarget
                    id = element.getAttribute('data-id');
                    // console.log(id);
                    axios.get('/notification/delete/' + id) //minta get Rqeuest

                        .then((response) => {
                            console.log(response.data);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });

                    href = element.getAttribute('href');

                    @if(Auth::user()->hasRole('admin'))

                    window.location.href = '/admin/' + href;

                    @elseif(Auth::user()->hasRole('marketing'))

                    window.location.href = '/marketing/' + href;

                    @endif

                    // // console.log(href)
                },
                getNotification() {

                    axios.get('/notification/') //minta get Rqeuest

                        .then((response) => {
                            this.notifications = response.data
                            this.jumlahNotif = this.notifications.length;
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                },
            },
        });
    </script> --}}
{{-- @endpush --}}
