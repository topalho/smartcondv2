@extends ('portal.master.layout')
@section('home')


    <h1 class="display-4 font-weight-normal">Cadastre os dados da Administradora:</h1>
    <div>
        <h1></h1>
        <form id="rendered-form">
            <div class="rendered-form">
                <div class="formbuilder-text form-group field-text-1599695602560"><label for="text-1599695602560"
                        class="formbuilder-text-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Campo de texto</font>
                                </font>
                            </font>
                        </font>
                    </label><input type="text" class="form-control" name="text-1599695602560" access="false"
                        id="text-1599695602560"></div>
                <div class="formbuilder-text form-group field-text-1599695609767"><label for="text-1599695609767"
                        class="formbuilder-text-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Campo de texto</font>
                                </font>
                            </font>
                        </font>
                    </label><input type="text" class="form-control" name="text-1599695609767" access="false"
                        id="text-1599695609767"></div>
                <div class="formbuilder-text form-group field-text-1599695631554"><label for="text-1599695631554"
                        class="formbuilder-text-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Campo de texto</font>
                                </font>
                            </font>
                        </font>
                    </label><input type="text" class="form-control" name="text-1599695631554" access="false"
                        id="text-1599695631554"></div>
                <div class="formbuilder-number form-group field-number-1599695635761"><label for="number-1599695635761"
                        class="formbuilder-number-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Numero</font>
                                </font>
                            </font>
                        </font>
                    </label><input type="number" class="form-control" name="number-1599695635761" access="false"
                        id="number-1599695635761"></div>
                <div class="formbuilder-select form-group field-select-1599695668494"><label for="select-1599695668494"
                        class="formbuilder-select-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Selecione</font>
                                </font>
                            </font>
                        </font>
                    </label><select class="form-control" name="select-1599695668494" id="select-1599695668494">
                        <option value="option-1" selected="true" id="select-1599695668494-0">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Opção 1</font>
                            </font>
                        </option>
                        <option value="option-2" id="select-1599695668494-1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">opção 2</font>
                            </font>
                        </option>
                        <option value="option-3" id="select-1599695668494-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Opção 3</font>
                            </font>
                        </option>
                    </select></div>
                <div class="formbuilder-text form-group field-text-1599695678718"><label for="text-1599695678718"
                        class="formbuilder-text-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Campo de texto</font>
                                </font>
                            </font>
                        </font>
                    </label><input type="text" class="form-control" name="text-1599695678718" access="false"
                        id="text-1599695678718"></div>
                <div class="formbuilder-text form-group field-text-1599695681340"><label for="text-1599695681340"
                        class="formbuilder-text-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Campo de texto</font>
                                </font>
                            </font>
                        </font>
                    </label><input type="text" class="form-control" name="text-1599695681340" access="false"
                        id="text-1599695681340"></div>
            </div>
        </form> <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-star-fill" fill="yellow"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
        </svg>
        <a class="btn btn-outline-secondary" href="{{ route('portal.condominios') }}"">Continuar!</a>
          </div>
          
@endsection
