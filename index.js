import {
    createClient
} from 'https://esm.sh/@supabase/supabase-js@2'

const supabaseUrl = 'https://jyqrhsuzaxmlzpnxqsoe.supabase.co'
const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Imp5cXJoc3V6YXhtbHpwbnhxc29lIiwicm9sZSI6ImFub24iLCJpYXQiOjE2Njk3NzAzOTEsImV4cCI6MTk4NTM0NjM5MX0.2QxcykedbdswHPPN14eYye1_T6p_rhvvFQ_-9kUgwx4'
const supabase = createClient(supabaseUrl, supabaseKey)


$("#x").on("click", async function () {
    $("#x").css("color", "red")
    var {
        data,
        error
    } = await supabase
        .from('users')
        .update({
            fullname: Math.random()
        })
        .eq('id', 1)
        .select()

    $("#x").text(data[0].fullname)
})
