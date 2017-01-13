<style type="text/css">
    body {
        background-color: #DADADA;
    }

    body > .grid {
        height: 100%;
    }

    .image {
        margin-top: -100px;
    }

    .column {
        max-width: 450px;
    }
</style>
<script>
    $(document)
        .ready(function () {
            $('.ui.form')
                .form({
                    fields: {
                        name: {
                            identifier: 'name',
                            rules: [
                                {
                                    type: 'empty',
                                    prompt: 'Пожалуйста веддите login'
                                },

                            ]
                        },
                        password: {
                            identifier: 'password',
                            rules: [
                                {
                                    type: 'empty',
                                    prompt: 'Пожалуйста ведите пароль'
                                },
                                {
                                    type: 'length[6]',
                                    prompt: 'Минимальная длина пароля 6 символов'
                                }
                            ]
                        }
                    }
                })
            ;
        })
    ;
</script>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <img src="view/images/logo.png" class="image">
            <div class="content">
                Log-in to your account
            </div>
        </h2>
        <form class="ui large form" method="post">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="name" placeholder="Login">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="ui fluid large teal submit button sbmbtn">Login</div>
            </div>

            <div class="ui error message"></div>
        </form>

        <div class="ui message">
            Где я ? <a class="ui teal" href="javascript:void(0);" data-title="Система рассылки"
                       data-content="По всем вопросам http://vk.com/alishka_aliev ">Инфо</a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.teal')
            .popup({
                on: 'click'
            });
    });

</script>