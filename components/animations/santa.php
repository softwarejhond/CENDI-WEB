<style>
    :root {
			--bg-color: #238A86;
			--base-red: #DC3B31;
			--pale-red: #E86934;
			--dark-red: #BD3524;
		}

		#lp-santa {
			width: 100%;
			max-width: 320px;
			height: 100%;
			max-height: 107px;
			background: url('https://contentservice.mc.reyrey.net/image_v1.0.0/?id=d483e64d-4886-5bdc-9b78-e84ab51b6f99&637360507984807363');
			background-size: contain;
			background-repeat: no-repeat;
			background-position: 50% 50%;
			position: absolute;
      top:50%;
			left: 0%;
			transform: translate(0%, -50%);
			z-index: 999;
			animation: moveHorizontal 5s linear infinite, bob 2s ease-in-out infinite;
		}

		@keyframes bob {
			50% {
				transform: translate(0%, -60%);
			}
		}

		@keyframes moveHorizontal {
			0% {
				left: 0%;
			}

			50% {
				left: 50%;
			}

			100% {
				left: 100%;
			}
		}

		.dust {
			width: 5px;
			height: 5px;
			border-radius: 5px;
			position: absolute;
		}

		.dust:after {
			content: '';
			width: 100%;
			height: 100%;
			background: white;
			border-radius: 5px;
			position: absolute;
			left: 0;
			top: 0;
			opacity: 0;
			animation: dust1 1.2s linear infinite;
		}

		@keyframes dust1 {
			50% {
				opacity: 0.75;
			}

			100% {
				left: -100px;
				width: 30px;
				opacity: 0;
			}
		}

		.dust:nth-child(2) {
			top: 97%;
			left: 15px;
		}

		.dust:nth-child(2):after {
			animation-delay: 0.8s;
		}

		.dust:nth-child(3) {
			top: 95%;
			left: 57%;
		}

		.dust:nth-child(3):after {
			animation-delay: 0.4s;
		}

		.dust:nth-child(4) {
			top: 95%;
			left: 95%;
		}
</style>
<div id='lp-santa'>
		<div class='dust'></div>
		<div class='dust'></div>
		<div class='dust'></div>
	</div>
