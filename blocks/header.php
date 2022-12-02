<view>
   <header>
		<div class="popups">

			<div class="popup zayavka" pop="zayavka">
				<div class="popup-inner">
					<div class="krest"> </div>

					<div class="sub-title">Заявка на услуги</div>

					<form>

						<div class="form-item">
							<input type="text" name="name" placeholder="Имя и фамилия" class="form__text-field"
								id="form1-name">
						</div>
						<div class="form-item">
							<input type="text" name="name" placeholder="email" class="form__text-field"
								id="form1-email">
						</div>
						<div class="form-item">
							<input type="text" name="name" placeholder="Телефон" class="form__text-field"
								id="form1-phone">
						</div>
						<div class="form-item">
							<input type="text" name="name" placeholder="Описание задачи" class="form__text-field"
								id="form1-description">
						</div>

						<div class="agree-wrapper">
							<div class="agree"> Отправляя заявку, я соглашаюсь передать свои персональные данные,
								содержащиеся в анкете и всех приложенных файлах. Я понимаю и соглашаюсь, что мои данные
								будут храниться и обрабатываться в соответствии с Федеральным законом «О персональных
								данных» </div>
							<label class="prikrepit-wrapper" file="file1" for="file1">
								<div> <img src="img/file.svg"> </div>
								<div class="prikrepit"> Прикрепить файл <span class="ne-bolee">Не более 10мб</span>
								</div>
								<div> </div>
							</label>
							<button class="gbutton zayav-button">Отправить заяку </button>
							<input type="file" id="file1" />

						</div>

						<input type="file" id="file1">

					</form>
				</div>
			</div>
		</div>
   </header>
</view>

<edit header="Шапка сайта">
   <div>
      <wb-module wb="module=yonger&mode=edit&block=common.inc" />
   </div>
</edit>