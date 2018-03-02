      </div> <!-- /row-fluid -->
      <hr/>
      <div class="container-fluid">
      <footer>
        <p class="text-center">
            <i>
{if $footer.price_index != 'Disabled' && isset($footer.exchange_rates)}
	{foreach from=$footer.exchange_rates key=code item=rate}
		{if in_array($code, ['time','time_f']) != TRUE}
		{$rate|escape:"html":"UTF-8"}{strtoupper($code)} / 
		{/if}
	{/foreach}
    Obtained {$footer.exchange_rates.time_f} from {$footer.price_index}.
{/if}
                <br/><a href="#">Powered by Girl</a>
            </i>
        </p>
      </footer>
    </div></div>  <!-- /container -->

  </body>
</html>
