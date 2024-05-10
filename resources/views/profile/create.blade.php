<x-layout>
    <div class="container">
        <div class="row h-100 d-flex m-2 align-items-center justify-content-center">
            <div class="col-12 col-lg-8 col-xl-6 card py-3">

                <div class="row">
                    <div class="col">
                        <span id="form-step-title" class="form-step-title">Dados Pessoais</span>
                    </div>
                </div>

                <div id="form-step-vizualizer" class="row no-gutters pt-3 pb-3">
                    <div class="col bg-primary"></div>
                    <div class="col ml-2 mr-1 bg-light"></div>
                    <div class="col mr-2 ml-1 bg-light"></div>
                    <div class="col bg-light"></div>
                </div>

                <div class="row" >
                    <!-- STEP 0 -->
                    <form id="step-0" class="col-12 needs-validation" onsubmit="return false">
                        <div class="form-group">
                            <label class="form-field-name">Nome</label>
                            <input name="name" type="text" class="form-control form-field" placeholder="Johnathan Doe" required>
                            <div class="invalid-feedback">
                                Campo Obrigatorio
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-field-name">Email</label>
                            <input  name="email" type="email" class="form-control form-field" placeholder="john@exemple.com" required>
                            <div class="invalid-feedback">
                                Campo Obrigatorio
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-field-name">Telefone</label>
                            <input name="phone" id="phone-masked" type="text" class="form-control form-field" placeholder="(xx) xxxxx-xxxx" pattern=".{14,15}" required>
                            <div class="invalid-feedback">
                                Campo Obrigatorio
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-field-name">Escolaridade</label>
                            <select name="education" class="custom-select form-field" placeholder="escolha" required>
                                <option selected value=""><span>Selecione...</span></option>
                                <option value="01">Fundamental - Incompleto</option>
                                <option value="02">Fundamental - Completo</option>
                                <option value="03">Médio - Incompleto</option>
                                <option value="04">Médio - Completo</option>
                                <option value="05">Superior - Incompleto</option>
                                <option value="06">Superior - Completo</option>
                                <option value="07">Pós-graduação (Lato senso) - Incompleto</option>
                                <option value="08">Pós-graduação (Lato senso) - Completo</option>
                                <option value="09">Pós-graduação (Stricto sensu, nível mestrado) - Incompleto</option>
                                <option value="10">Pós-graduação (Stricto sensu, nível mestrado) - Completo</option>
                                <option value="11">Pós-graduação (Stricto sensu, nível doutor) - Incompleto</option>
                                <option value="12">Pós-graduação (Stricto sensu, nível doutor) - Completo</option>
                            </select>
                            <div class="invalid-feedback">
                                Campo Obrigatorio
                            </div>
                            <!-- <input type="select" class="form-control" placeholder="john@exemple.com"> -->
                        </div>
                    </form>
                    
                    <!-- STEP 1 -->
                    <form id="step-1" class="col-12 needs-validation" onsubmit="return false">
                        <div class="form-group">
                            <label class="form-field-name">Cargo Desejado</label>
                            <input name="role" type="text" class="form-control form-field" placeholder="Ex: Desenvolvedor Full Stack" required>
                            <div class="invalid-feedback">
                                Campo Obrigatorio
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-field-name">Observações (Opcional)</label>
                            <textarea name="observation" class="form-control form-field" rows="3"></textarea>
                        </div>
                    </form>

                    <!-- STEP 2 -->
                    <form id="step-2" class="col-12 needs-validation" onsubmit="return false">
                        <div class="form-group">
                            <label class="form-field-name">Arquivo</label>
                            <input name="file" type="file" accept=".doc,.docx,.pdf" class="form-field" required>
                            <div class="invalid-feedback">
                                Campo Obrigatorio
                            </div>
                        </div>
                    </form>

                    <!-- STEP FINAL (3) -->
                    <form id="step-3" class="col-12 needs-validation" action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="w-100 text-center">
                            <small class="text-danger"><b >Atenção!</b> Nesse projeto de teste o email com as informaçoes do candidato será enviado ao mesmo email informado no formulário</small>
                        </div>
                        <label class="form-field-name w-100">Nome:</label>
                        <input class="full-form-field-label w-100" required disabled>
                        <input name="name" type="hidden" class="full-form-field w-100" required>
                        
                        <label class="form-field-name w-100">Email:</label>
                        <input class="full-form-field-label w-100" required disabled>
                        <input name="email" type="hidden" class="full-form-field w-100" required>
                        
                        <label class="form-field-name w-100">Telefone:</label>
                        <input class="full-form-field-label w-100" required disabled>
                        <input name="phone" type="hidden" class="full-form-field w-100" required>
                                             
                        <label class="form-field-name w-100">Escolaridade:</label>
                        <select class="full-form-field-label w-100 pb-2" required disabled>
                            <option value="01">Fundamental - Incompleto</option>
                            <option value="02">Fundamental - Completo</option>
                            <option value="03">Médio - Incompleto</option>
                            <option value="04">Médio - Completo</option>
                            <option value="05">Superior - Incompleto</option>
                            <option value="06">Superior - Completo</option>
                            <option value="07">Pós-graduação (Lato senso) - Incompleto</option>
                            <option value="08">Pós-graduação (Lato senso) - Completo</option>
                            <option value="09">Pós-graduação (Stricto sensu, nível mestrado) - Incompleto</option>
                            <option value="10">Pós-graduação (Stricto sensu, nível mestrado) - Completo</option>
                            <option value="11">Pós-graduação (Stricto sensu, nível doutor) - Incompleto</option>
                            <option value="12">Pós-graduação (Stricto sensu, nível doutor) - Completo</option>
                        </select>
                        <input name="education" type="hidden" class="full-form-field w-100" required>

                        <label class="form-field-name w-100">Cargo Desejado:</label>
                        <input class="full-form-field-label w-100" required disabled>
                        <input name="role" type="hidden" class="full-form-field w-100" required>
                           
                        <label class="form-field-name w-100">Observações (Opcional):</label>
                        <input class="full-form-field-label w-100" required disabled>
                        <input name="observation" type="hidden" class="full-form-field w-100">
    
                        <label class="form-field-name w-100">Arquivo:</label>
                        <input class="full-form-field-label w-100" required disabled>
                        <input name="file" type="file" class="full-form-field w-100 d-none" required>
                        
                        <input name="sended_at" type="hidden" value="<?php echo date('Y-m-d h:i:sa'); ?>" required>
                                            
                    </form>

                </div>

                <!-- (Campo select), observações, arquivo e data e hora do envio. -->
                 
                <div class="row justify-content-between mt-2">
                    <div class="col">
                        <button id="btnBack" class="btn btn-secondary">Voltar</button>
                    </div>
                    <div class="col">
                        <button id="btnNext" class="btn btn-primary float-right">Avançar</button>
                    </div>
                </div>
                

                <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" placeholder="senha">
                </div> -->
            </div>
                    
        </div>
    </div>
</x-layout>
