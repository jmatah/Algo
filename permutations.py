#
#  LeetCode 46. Permutations Python
#
class Solution(object):
    def permute(self, nums:list[int])->list[int]:
        result = []

        if len(nums) == 1:
            return [nums[:]]

        for i in range(len(nums)):
            n = nums.pop(0)
            perms = self.permute(nums)

            for perm in perms:
                perm.append(n)
            
            result.extend(perms)
            nums.append(n)
        return result

nums = [1,2,3]
sol = Solution()
ans = sol.permute(nums)
print(ans)


